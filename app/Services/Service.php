<?php

namespace App\Services;

use App\Contracts\Models;

class Service
{
    /**
     * @var \App\Contracts\Models\LogInterface
     */
    protected $logInterface;

    /**
     * @var \App\Contracts\Models\UserInterface
     */
    protected $userInterface;

    /**
     * @var \App\Contracts\Models\RoleInterface
     */
    protected $roleInterface;

    /**
     * @var \App\Contracts\Models\LandingInterface
     */
    protected $landingInterface;

    /**
     * @var \App\Contracts\Models\ActivityInterface
     */
    protected $activityInterface;

    /**
     * @var \App\Contracts\Models\LanguageInterface
     */
    protected $languageInterface;

    /**
     * @var \App\Contracts\Models\PermissionInterface
     */
    protected $permissionInterface;

    /**
     * @var \App\Contracts\Models\LandingTypeInterface
     */
    protected $landingTypeInterface;

    /**
     * @var \App\Contracts\Models\ActivityImageInterface
     */
    protected $activityImageInterface;

    /**
     * @var \App\Contracts\Models\ApplicationSettingInterface
     */
    protected $applicationSettingInterface;

    /**
     * @var \App\Contracts\Models\ApplicationSettingTypeInterface
     */
    protected $applicationSettingTypeInterface;

    /**
     * Model contract constructor.
     *
     * @param  \App\Contracts\Models\LogInterface  $logInterface
     * @param  \App\Contracts\Models\UserInterface  $userInterface
     * @param  \App\Contracts\Models\RoleInterface  $roleInterface
     * @param  \App\Contracts\Models\LandingInterface  $landingInterface
     * @param  \App\Contracts\Models\ActivityInterface  $activityInterface
     * @param  \App\Contracts\Models\LanguageInterface  $languageInterface
     * @param  \App\Contracts\Models\PermissionInterface  $permissionInterface
     * @param  \App\Contracts\Models\LandingTypeInterface  $landingTypeInterface
     * @param  \App\Contracts\Models\ActivityImageInterface  $activityImageInterface
     * @param  \App\Contracts\Models\ApplicationSettingInterface  $applicationSettingInterface
     * @param  \App\Contracts\Models\ApplicationSettingTypeInterface  $applicationSettingTypeInterface
     */
    public function __construct(
        Models\LogInterface $logInterface,
        Models\UserInterface $userInterface,
        Models\RoleInterface $roleInterface,
        Models\LandingInterface $landingInterface,
        Models\ActivityInterface $activityInterface,
        Models\LanguageInterface $languageInterface,
        Models\PermissionInterface $permissionInterface,
        Models\LandingTypeInterface $landingTypeInterface,
        Models\ActivityImageInterface $activityImageInterface,
        Models\ApplicationSettingInterface $applicationSettingInterface,
        Models\ApplicationSettingTypeInterface $applicationSettingTypeInterface
    ) {
        $this->logInterface = $logInterface;
        $this->userInterface = $userInterface;
        $this->roleInterface = $roleInterface;
        $this->landingInterface = $landingInterface;
        $this->activityInterface = $activityInterface;
        $this->languageInterface = $languageInterface;
        $this->permissionInterface = $permissionInterface;
        $this->landingTypeInterface = $landingTypeInterface;
        $this->activityImageInterface = $activityImageInterface;
        $this->applicationSettingInterface = $applicationSettingInterface;
        $this->applicationSettingTypeInterface = $applicationSettingTypeInterface;
    }
}
