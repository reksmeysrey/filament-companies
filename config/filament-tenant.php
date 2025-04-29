<?php

use App\Models\User;
use App\Models\Company;
use App\Models\Employeeship;
use App\Models\CompanyInvitation;

return [
    'user_model' => env('FILAMENT_USER_MODEL', User::class),
    'company_model' => env('FILAMENT_TENANT_MODEL', Company::class),
    'company_model_table' => env('FILAMENT_TENANT_TABLE_NAME', 'companies'),
    'company_invitation_model' => env('FILAMENT_TENANT_COMPANY_INVITATION', CompanyInvitation::class),
    'company_invitation_table_name' => env('FILAMENT_TENANT_COMPANY_INVITATION_TABLE_NAME', 'company_invitations'),
    'employeeship_model' => env('FILAMENT_TENANT_EMPLOYEESHIP_MODEL', Employeeship::class),
    'foreign_key' => env('FILAMENT_TENANT_FOREIGN_KEY', 'company_id'),
    'current_foreign_key_id' => env('FILAMENT_TENANT_CURRENT_FOREIGN_KEY', 'current_company_id'),
    'pivot_table' => env('FILAMENT_TENANT_PIVOT_TABLE', 'company_user'),
];
