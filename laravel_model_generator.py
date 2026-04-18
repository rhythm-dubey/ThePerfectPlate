import os
import re

class LaravelModelGenerator:
    def __init__(self, project_path="."):
        self.project_path = project_path
        self.models_path = os.path.join(project_path, "app", "Models")
        
        # Create Models directory if not exists
        os.makedirs(self.models_path, exist_ok=True)
    
    def generate_model(self, model_name, fillable=None, table_name=None, timestamps=True):
        """
        Generate Laravel Model
        
        Args:
            model_name: Name of model (e.g., 'Product', 'Order')
            fillable: List of fillable fields
            table_name: Custom table name (optional)
            timestamps: Use timestamps or not
        """
        # Model file path
        model_file = os.path.join(self.models_path, f"{model_name}.php")
        
        # Prepare fillable array string
        if fillable:
            fillable_str = "        '" + "',\n        '".join(fillable) + "'"
        else:
            fillable_str = "        //"
        
        # Prepare table name
        table_str = f"    protected $table = '{table_name}';\n" if table_name else ""
        
        # Prepare timestamps
        timestamps_str = "    public $timestamps = false;\n" if not timestamps else ""
        
        # Model template
        model_template = f"""<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class {model_name} extends Model
{{
    use HasFactory;

{table_str}{timestamps_str}
    protected $fillable = [
{fillable_str}
    ];
}}
"""
        
        # Write file
        with open(model_file, 'w') as f:
            f.write(model_template)
        
        print(f"✅ Created: {model_name}.php")
        return True
    
    def bulk_generate(self, models_config):
        """
        Generate multiple models at once
        
        Args:
            models_config: Dictionary of model configurations
            Example:
            {
                "Product": ["name", "price", "description"],
                "Order": ["order_number", "customer_id", "total_amount"],
                "Customer": ["name", "email", "phone"]
            }
        """
        for model_name, fillable in models_config.items():
            self.generate_model(model_name, fillable)
        
        print(f"\n🎉 Total {len(models_config)} models generated successfully!")

def main():
    # ============================================
    # DEFINE YOUR MODELS HERE
    # ============================================
    
    models_to_create = {
        # Role & Permission System
        "Role": ["name", "slug", "description", "is_active"],
        "Action": ["name", "slug", "type"],
        "Model": ["name", "slug"],
        "ModelActionPermission": ["model_id", "action_id"],
        "RolePermission": ["role_id", "model_action_permission_id"],
        
        # Master Tables
        "Event": ["name", "slug", "description", "default_setup_minutes", "is_active", "display_order"],
        "MenuCategory": ["name", "slug", "description", "display_order", "is_active"],
        "DietaryTag": ["name", "slug", "color", "is_active"],
        "OrderStatus": ["name", "slug", "color", "display_order", "is_active"],
        "PaymentStatus": ["name", "slug", "color", "display_order", "is_active"],
        
        # Menu Items
        "MenuItem": ["category_id", "name", "slug", "description", "unit", "base_price", "is_available", "is_vegetarian"],
        "MenuItemDietaryTag": ["menu_item_id", "dietary_tag_id"],
        
        # Order Management
        "Order": [
            "order_number", "customer_id", "created_by", 
            "order_status_id", "payment_status_id", "order_date",
            "subtotal", "tax_amount", "discount_amount", 
            "delivery_charges", "total_amount", 
            "special_instructions", "cancellation_reason"
        ],
        "OrderEvent": [
            "order_id", "event_id", "event_name", 
            "start_datetime", "end_datetime", "venue_address",
            "guest_count", "special_instructions", "display_order"
        ],
        "OrderEventItem": [
            "order_event_id", "menu_item_id", "quantity",
            "unit_price", "total_price", "special_instructions"
        ],
    }
    
    # ============================================
    # CUSTOM CONFIGURATION
    # ============================================
    
    # Set your Laravel project path
    project_path = r"D:\XAMPP\htdocs\ThePerfectPlate"  # Change this!
    
    # Initialize generator
    generator = LaravelModelGenerator(project_path)
    
    # Generate models
    generator.bulk_generate(models_to_create)
    
    # Optional: Generate single model with custom table
    # generator.generate_model(
    #     model_name="Customer",
    #     fillable=["user_id", "company_name", "gst_number"],
    #     table_name="customers",
    #     timestamps=True
    # )

if __name__ == "__main__":
    main()