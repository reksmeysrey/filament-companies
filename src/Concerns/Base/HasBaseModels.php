<?php

namespace Wallo\FilamentCompanies\Concerns\Base;

use App\Models\Company;
use App\Models\CompanyInvitation;
use App\Models\Employeeship;
use App\Models\User;

trait HasBaseModels
{
    /**
     * The user model that should be used by Company.
     */
    public static string $userModel = User::class;

    /**
     * The company model that should be used by Company.
     */
    public static string $companyModel = Company::class;

    /**
     * The employeeship model that should be used by Company.
     */
    public static string $employeeshipModel = Employeeship::class;

    /**
     * The company invitation model that should be used by Company.
     */
    public static string $companyInvitationModel = CompanyInvitation::class;

    /**
     * Get the name of the user model used by the application.
     */
    public static function userModel(): string
    {
        return config('filament-tenant.user_model') ?? static::$userModel;
    }

    /**
     * Get the name of the company model used by the application.
     */
    public static function companyModel(): string
    {
        return config('filament-tenant.company_model') ?? static::$companyModel;
    }

    /**
     * Get the name of the employeeship model used by the application.
     */
    public static function employeeshipModel(): string
    {
        return config('filament-tenant.employeeship_model') ?? static::$employeeshipModel;
    }

    /**
     * Get the name of the company invitation model used by the application.
     */
    public static function companyInvitationModel(): string
    {
        return config('filament-tenant.company_invitation_model') ?? static::$companyInvitationModel;
    }

    /**
     * Get a new instance of the user model.
     */
    public static function newUserModel(): mixed
    {
        $model = static::userModel();

        return new $model;
    }

    /**
     * Get a new instance of the company model.
     */
    public static function newCompanyModel(): mixed
    {
        $model = static::companyModel();

        return new $model;
    }

    /**
     * Specify the user model that should be used by Company.
     */
    public static function useUserModel(string $model): static
    {
        static::$userModel = $model;

        return new static;
    }

    /**
     * Specify the company model that should be used by Company.
     */
    public static function useCompanyModel(string $model): static
    {
        static::$companyModel = $model;

        return new static;
    }

    /**
     * Specify the employeeship model that should be used by Company.
     */
    public static function useEmployeeshipModel(string $model): static
    {
        static::$employeeshipModel = $model;

        return new static;
    }

    /**
     * Specify the company invitation model that should be used by Company.
     */
    public static function useCompanyInvitationModel(string $model): static
    {
        static::$companyInvitationModel = $model;

        return new static;
    }

    /**
     * Find a user instance by the given ID.
     */
    public static function findUserByIdOrFail(int $id): mixed
    {
        return static::newUserModel()->where('id', $id)->firstOrFail();
    }

    /**
     * Find a user instance by the given email address or fail.
     */
    public static function findUserByEmailOrFail(string $email): mixed
    {
        return static::newUserModel()->where('email', $email)->firstOrFail();
    }
}
