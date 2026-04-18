# 🚀 Catering Order Management System - Project Description

## 📌 One-Line Summary
A Laravel-based catering management system to create customer orders with multiple events (wedding, corporate lunch, birthday) and track menu items, statuses, and permissions.

## 🎯 Core Purpose
Single catering business can manage customers, create orders with multiple time-bound events, and track menu items with role-based access control.

## 🗂️ Key Modules

| Module | What it does |
|--------|---------------|
| **Users & Roles** | RBAC system with roles (Admin/Employee/Customer) and granular permissions |
| **Customers** | Customer records linked to users |
| **Events Master** | Predefined event types (Wedding, Corporate, Birthday) |
| **Menu** | Categories → Items with pricing, dietary tags |
| **Orders** | One order → Multiple events → Multiple menu items |
| **Status Management** | Separate master tables for order & payment statuses |

## 📊 Database Structure (16 Tables)
roles ─── role_user ─── users
│
└── role_permissions ─── model_action_permissions ─── models & actions

events (master)
menu_categories ─── menu_items
order_statuses (master)
payment_statuses (master)

orders ─── order_events ─── order_event_items

text

## 🔄 Core Workflow
Admin creates customer

Admin creates order for customer

Add multiple events in same order (each with own date/time)

Select menu items for each event

Track order & payment status separately

text

## 💡 Key Features

- ✅ One order, multiple events (different dates/venues)
- ✅ Granular role-based permissions (model-action level)
- ✅ Master tables for statuses (easy to extend)
- ✅ Menu items with vegetarian flag & dietary tags
- ✅ JSON fields for future customizations

## 🛠️ Tech Stack

| Layer | Technology |
|-------|------------|
| Framework | Laravel 11 |
| Database | MySQL / PostgreSQL |
| Schema | Migration (single file + default auth) |
| Auth | Laravel Breeze/Sanctum (optional) |

## 📈 Future Scope Ready

- Inventory management (add stock fields)
- Invoice & GST reporting
- Employee dashboard with limited access
- Customer portal for self-ordering
- Kitchen display system

## 🎯 MVP Success Criteria

> "Admin can login → create customer → create order with 2 events (e.g., Lunch + Dinner) → assign menu items → see order total"

## 📁 Quick Reference for Team

```bash
# Migration run order
php artisan migrate  # Users table first (Laravel default), then custom migration

# Seed default data
Roles: Admin, Employee, Customer
Events: Wedding, Corporate Lunch, Birthday Party
Order Statuses: Draft, Confirmed, Preparing, Delivered, Cancelled
Payment Statuses: Pending, Partial, Paid, Refunded