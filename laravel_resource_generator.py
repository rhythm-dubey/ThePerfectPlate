import subprocess
import os
import time

class FilamentResourceGenerator:
    def __init__(self, project_path):
        self.project_path = project_path
        self.resources = []
    
    def set_resources(self, resources_list):
        """Set the list of resources to generate"""
        self.resources = resources_list
    
    def generate_resource(self, resource_name, title_attribute="name", read_only=False, generate_from_db=True):
        """
        Generate Filament resource
        
        Args:
            resource_name: Name of the resource (e.g., 'Action', 'Role')
            title_attribute: Title attribute for the resource (default: 'name')
            read_only: Generate read-only view page? (default: False)
            generate_from_db: Generate from current database columns? (default: True)
        """
        print(f"\n🔄 Generating Filament resource for: {resource_name}")
        
        # Build the artisan command
        cmd = ["php", "artisan", "make:filament-resource", resource_name]
        
        # Prepare inputs for prompts
        inputs = []
        
        # 1. Title attribute prompt
        inputs.append(title_attribute)
        inputs.append("\n")
        
        # 2. Read-only view page prompt (yes/no)
        inputs.append("no" if not read_only else "yes")
        inputs.append("\n")
        
        # 3. Generate from database columns prompt (yes/no)
        inputs.append("yes" if generate_from_db else "no")
        inputs.append("\n")
        
        # Convert inputs to string
        input_string = "".join(inputs)
        
        try:
            # Run command with automated inputs
            process = subprocess.Popen(
                cmd,
                cwd=self.project_path,
                stdin=subprocess.PIPE,
                stdout=subprocess.PIPE,
                stderr=subprocess.PIPE,
                text=True
            )
            
            stdout, stderr = process.communicate(input=input_string, timeout=30)
            
            if process.returncode == 0:
                print(f"✅ Successfully created: {resource_name}Resource")
                if stdout:
                    print(f"   {stdout.splitlines()[0] if stdout else ''}")
            else:
                print(f"❌ Failed: {resource_name}")
                if stderr:
                    print(f"   Error: {stderr}")
                    
        except subprocess.TimeoutExpired:
            print(f"⏰ Timeout for: {resource_name}")
            process.kill()
        except Exception as e:
            print(f"❌ Exception for {resource_name}: {str(e)}")
    
    def generate_all_resources(self, title_attribute="name", read_only=False, generate_from_db=True, delay=1):
        """
        Generate all Filament resources
        """
        print(f"\n{'='*60}")
        print(f"🚀 Generating Filament Resources for {len(self.resources)} items")
        print(f"{'='*60}")
        
        success_count = 0
        failed_count = 0
        
        for resource in self.resources:
            try:
                self.generate_resource(
                    resource_name=resource,
                    title_attribute=title_attribute,
                    read_only=read_only,
                    generate_from_db=generate_from_db
                )
                success_count += 1
                time.sleep(delay)
            except Exception as e:
                print(f"❌ Failed to generate {resource}: {e}")
                failed_count += 1
        
        print(f"\n{'='*60}")
        print(f"📊 Summary: {success_count} succeeded, {failed_count} failed")
        print(f"{'='*60}")

def main():
    # ============================================
    # CONFIGURE YOUR SETTINGS HERE
    # ============================================
    
    # Your Laravel project path
    project_path = r"D:\XAMPP\htdocs\ThePerfectPlate"
    
    # List of Filament resources to generate
    resources_to_generate = [
        # "Role",
        # "Action", 
        "Model",
        # "ModelActionPermission",
        # "RolePermission",
        # "Event",
        # "MenuCategory",
        # "DietaryTag",
        # "MenuItem",
        # "MenuItemDietaryTag",
        # "OrderStatus",
        # "PaymentStatus",
        # "Order",
        # "OrderEvent",
        # "OrderEventItem",
    ]
    
    # ============================================
    # GENERATE RESOURCES
    # ============================================
    
    generator = FilamentResourceGenerator(project_path)
    generator.set_resources(resources_to_generate)
    
    # Generate all resources
    generator.generate_all_resources(
        title_attribute="name",
        read_only=False,
        generate_from_db=True,
        delay=1
    )

if __name__ == "__main__":
    main()