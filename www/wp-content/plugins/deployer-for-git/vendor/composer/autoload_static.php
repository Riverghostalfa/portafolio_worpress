<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5cfe0525bdfa1804aa770516491bf701
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DeployerForGit\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DeployerForGit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DeployerForGit\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'DeployerForGit\\ApiRequests\\PackageUpdate' => __DIR__ . '/../..' . '/includes/ApiRequests/PackageUpdate.php',
        'DeployerForGit\\DataManager' => __DIR__ . '/../..' . '/includes/DataManager.php',
        'DeployerForGit\\Helper' => __DIR__ . '/../..' . '/includes/Helper.php',
        'DeployerForGit\\Logger' => __DIR__ . '/../..' . '/includes/Logger.php',
        'DeployerForGit\\PluginInstallerSkin' => __DIR__ . '/../..' . '/includes/PluginInstallerSkin.php',
        'DeployerForGit\\Providers\\BaseProvider' => __DIR__ . '/../..' . '/includes/Providers/BaseProvider.php',
        'DeployerForGit\\Providers\\BitbucketProvider' => __DIR__ . '/../..' . '/includes/Providers/BitbucketProvider.php',
        'DeployerForGit\\Providers\\GiteaProvider' => __DIR__ . '/../..' . '/includes/Providers/GiteaProvider.php',
        'DeployerForGit\\Providers\\GithubProvider' => __DIR__ . '/../..' . '/includes/Providers/GithubProvider.php',
        'DeployerForGit\\Providers\\GitlabProvider' => __DIR__ . '/../..' . '/includes/Providers/GitlabProvider.php',
        'DeployerForGit\\Subpages\\DashboardPage\\Dashboard' => __DIR__ . '/../..' . '/includes/Subpages/DashboardPage/Dashboard.php',
        'DeployerForGit\\Subpages\\InstallPackage' => __DIR__ . '/../..' . '/includes/Subpages/InstallPackage.php',
        'DeployerForGit\\Subpages\\InstallPluginPage\\InstallPlugin' => __DIR__ . '/../..' . '/includes/Subpages/InstallPluginPage/InstallPlugin.php',
        'DeployerForGit\\Subpages\\InstallThemePage\\InstallTheme' => __DIR__ . '/../..' . '/includes/Subpages/InstallThemePage/InstallTheme.php',
        'DeployerForGit\\Subpages\\LogsPage\\Logs' => __DIR__ . '/../..' . '/includes/Subpages/LogsPage/Logs.php',
        'DeployerForGit\\Subpages\\MiscellaneousPage\\Miscellaneous' => __DIR__ . '/../..' . '/includes/Subpages/MiscellaneousPage/Miscellaneous.php',
        'DeployerForGit\\ThemeInstallerSkin' => __DIR__ . '/../..' . '/includes/ThemeInstallerSkin.php',
        'DeployerForGit\\WPUpgraderSkin' => __DIR__ . '/../..' . '/includes/WPUpgraderSkin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5cfe0525bdfa1804aa770516491bf701::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5cfe0525bdfa1804aa770516491bf701::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5cfe0525bdfa1804aa770516491bf701::$classMap;

        }, null, ClassLoader::class);
    }
}
