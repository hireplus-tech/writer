<?php

namespace App\Classes;

use App\Models\Lang;
use App\Models\Translation;
use Nwidart\Modules\Facades\Module;

class LangTrans
{
    public static $mainTranslations = [
        'common' => [
            'enabled' => 'Enabled',
            'disabled' => 'Disabled',
            'id' => 'Id',
            'action' => 'Action',
            'placeholder_default_text' => 'Please Enter {0}',
            'placeholder_social_text' => 'Please Enter {0} Url',
            'placeholder_search_text' => 'Search By {0}',
            'select_default_text' => 'Select {0}...',
            'create' => 'Create',
            'edit' => 'Edit',
            'update' => 'Update',
            'cancel' => 'Cancel',
            'delete' => 'Delete',
            'success' => 'Success',
            'error' => 'Error',
            'yes' => 'Yes',
            'no' => 'No',
            'fix_errors' => 'Please Fix Below Errors.',
            'cancelled' => 'Cancelled',
            'pending' => 'Pending',
            'paid' => 'Paid',
            'completed' => 'Completed',
            'save' => 'Save',
            'all' => 'All',
            'name' => 'Name',
            'back' => 'Back',
            'max_amount' => 'Max. Amount',
            'date_time' => 'Date Time',
            'select_time' => 'Select Time',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'search' => 'Search',
            'date' => 'Date',
            'confirm' => 'Confirm',
            'title' => 'Title',
            'value' => 'Value',
            'add' => 'Add',
            'view' => 'View',
            'edit' => 'Edit',
            'download' => 'Download',
            'total' => 'Total',
            'email' => 'Email',
            'phone' => 'Phone',
            'purchase_code' => 'Purchase Code',
            'verify_purchase' => 'Verify Purchase',
            'install' => 'Install',
            'installing' => 'Installing',
            'updating' => 'Updating',
            'free' => 'Free',
            'paid' => 'Paid',
            'domain' => 'Domain',
            'verify' => 'Verify',
            'send' => 'Send',
            'upload' => 'Upload',
            'view_all' => 'View All',
            'unpaid' => 'Unpaid',
            'loading' => 'Loading',
            'update_app' => 'Update App',
            'welcome_back' => 'Welcome {0}',
            'off' => 'Off',
            'on_create' => 'On Create',
            'on_update' => 'On Update',
            'on_delete' => 'On Delete',
            'demo_account_credentials' => 'Demo account login credentials',
            'created_by' => 'Created By',
            'import' => 'Import',
            'file' => 'File',
            'copy_url' => 'Copy Url',
            'print' => 'Print',
            'amount' => 'Amount',
            'status' => 'Status',
            'active' => 'Active',
            'inactive' => 'Inactive',
            'verified' => 'Verified',
            'configure' => 'Configure',
            'logo' => 'Logo',
            'slug' => 'Slug',
            'description' => 'Description',
            'image' => 'Image',
            'address' => 'Address',
            'not_allowed' => 'Not Allowed',
            'details' => 'Details',
            'created_at' => 'Created At',
            'low' => 'Low',
            'average' => 'Average',
            'good' => 'Good',
            'premium' => 'Premium',
            'high' => 'High',
            'page_content' => 'Page Content',
            'rating' => 'Rating',
        ],
        'menu' => [
            'dashboard' => 'Dashboard',
            'users' => 'Users',
            'staff_members' => 'Staff Members',
            'settings' => 'Settings',
            'company' => 'Company Settings',
            'profile' => 'Profile',
            'translations' => 'Translations',
            'languages' => 'Languages',
            'roles' => 'Role & Permissions',
            'currencies' => 'Currencies',
            'login' => 'Login',
            'logout' => 'Logout',
            'verify_product' => 'Verify Product',
            'modules' => 'Modules',
            'storage_settings' => 'Storage Settings',
            'email_settings' => 'Email Settings',
            'update_app' => 'Update App',
            'database_backup' => 'Database Backup',
            'companies' => 'Companies',
            'writerSettings' => 'Writer Settings',
            'writer_categories' => 'Writer Categories',
            'writer_templates' => 'Writer Templates',
            'writer_forms' => 'Writer Forms',
            'writer' => 'Writer',
            'ai_tools' => 'AI Tools',
            'work_spaces' => 'Workspaces',
            'writer_documents' => 'My Documents',
            'subscription_settings' => 'Subscription Settings',
            'front_settings' => 'Front Settings',
        ],
        'dashboard' => [
            'dashboard' => 'Dashboard',
            'total_workspace' => 'Total Workspace',
            'document_generated' => 'Document Generated',
            'character_generated' => 'Character Generated',
            'generated_character_history' => 'Generated Character History',
        ],
        'user' => [
            'add' => 'Add New Staff Member',
            'edit' => 'Edit Staff Member',
            'created' => 'Staff Member Created Successfully',
            'updated' => 'Staff Member Updated Successfully',
            'deleted' => 'Staff Member Deleted Successfully',
            'staff_member_details' => 'Staff Member Details',
            'staff_member' => 'Staff Member',
            'delete_message' => 'Are you sure you want to delete this staff member?',
            'import_staff_members' => 'Import Staff Members',
            'email_phone' => 'Email or Phone',
            'user' => 'User',
            'name' => 'Name',
            'created_at' => 'Created At',
            'email' => 'Email',
            'password' => 'Password',
            'login_enabled' => 'Login Enabled',
            'profile_image' => 'Profile Image',
            'company_name' => 'Company Name',
            'phone' => 'Phone Number',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'zipcode' => 'Zipcode',
            'status' => 'Status',
            'role' => 'Role',
            'profile_updated' => 'Profile Updated Successfully',
            'password_blank' => "Leave blank if you don't want to update password.",
            'admin_account_details' => "Admin Account Details",
            'import_users' => 'Import Users',
        ],
        'writer' => [
            'ai_tool' => 'AI Tool',
            'generate' => 'Generate',
            'start_writing' => 'Start Writing',
            'content' => 'Content',
            'total_characters' => 'Total Characters',
            'document_name' => 'Document Name',
            'save_document' => 'Save Document',
            'content_quality' => 'Content Quality',
            'content_generated' => 'Content Generated Successfully',
            'max_result_length' => 'Max Result Length',
            'language' => 'Language',
        ],
        'role' => [
            'add' => 'Add New Role',
            'edit' => 'Edit Role',
            'created' => 'Role Created Successfully',
            'updated' => 'Role Updated Successfully',
            'deleted' => 'Role Deleted Successfully',
            'role_details' => 'Role Details',
            'delete_message' => 'Are you sure you want to delete this role?',
            'display_name' => 'Display Name',
            'role_name' => 'Role Name',
            'description' => 'Description',
            'user_management' => 'User Management',
            'permissions' => 'Permissions',
        ],
        'company' => [
            'add' => 'Add New Company',
            'edit' => 'Edit Company',
            'created' => 'Company Created Successfully',
            'updated' => 'Company Updated Successfully',
            'deleted' => 'Company Deleted Successfully',
            'currency_details' => 'Company Details',
            'delete_message' => 'Are you sure you want to delete this company?',
            'name' => 'Company Name',
            'short_name' => 'Company Short Name',
            'email' => 'Company Email',
            'phone' => 'Company Phone',
            'address' => 'Company Address',
            'currency' => 'Currency',
            'logo' => 'Company Logo',
            'left_sidebar_theme' => 'Left Sidebar Theme',
            'dark' => 'Dark',
            'light' => 'Light',
            'dark_logo' => 'Dark Logo',
            'light_logo' => 'Light Logo',
            'small_dark_logo' => 'Small Dark Logo',
            'small_light_logo' => 'Small Light Logo',
            'primary_color' => 'Primary Color',
            'default_timezone' => 'Default Timezone',
            'date_format' => 'Date Format',
            'time_format' => 'Time Format',
            'auto_detect_timezone' => 'Auto Detect Timezone',
            'app_debug' => 'App Debug',
            'update_app_notification' => 'Update App Notitication',
            'login_image' => 'Login Image',
            'layout' => 'Layout',
            'rtl' => 'RTL',
            'ltr' => 'LTR',
            'shortcut_menu_Placement' => 'Add Menu Placement',
            'top_and_bottom' => 'Top & Bottom',
            'top_header' => 'Top Header',
            'bottom_corner' => 'Bottom Conrer',
            'shortcut_menu_setting' => 'Add Menu Settings',
            'menu_setting_updated' => 'Menu Setting Updated',
            'basic_details' => 'Basic Details',
            'details' => 'Details',
            'register_date' => 'Register Date',
            'total_users' => 'Total Users',
        ],
        'currency' => [
            'add' => 'Add New Currency',
            'edit' => 'Edit Currency',
            'created' => 'Currency Created Successfully',
            'updated' => 'Currency Updated Successfully',
            'deleted' => 'Currency Deleted Successfully',
            'currency_details' => 'Currency Details',
            'delete_message' => 'Are you sure you want to delete this currency?',
            'name' => 'Currency Name',
            'symbol' => 'Currency Symbol',
            'position' => 'Currency Position',
            'front' => 'Front',
            'front_position_example' => 'Example : $100',
            'behind' => 'Behind',
            'behind_position_example' => 'Example : 100$',
            'code' => 'Currency Code',
        ],
        'writer_category' => [
            'add' => 'Add New Writer Category',
            'edit' => 'Edit Writer Category',
            'created' => 'Writer Category Created Successfully',
            'updated' => 'Writer Category Updated Successfully',
            'deleted' => 'Writer Category Deleted Successfully',
            'writer_category_details' => 'Writer Category Details',
            'delete_message' => 'Are you sure you want to delete this Writer Category?',
            'name' => 'Writer Category Name',
            'logo' => 'Logo',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'description' => 'Description'
        ],
        'writer_document' => [
            'edit' => 'Edit Document',
            'updated' => 'Document Updated Successfully',
            'deleted' => 'Document Deleted Successfully',
            'delete_message' => 'Are you sure you want to delete this document?',
            'document_name' => 'Document Name',
            'created_by' => 'Created By',
            'content' => 'Content',
            'workspace' => 'Workspace',
            'writer_template' => 'Writer Template',
            'character_count' => 'Character Count',
        ],
        'work_space' => [
            'add' => 'Add New Workspace',
            'edit' => 'Edit Workspace',
            'created' => 'Workspace Created Successfully',
            'updated' => 'Workspace Updated Successfully',
            'deleted' => 'Workspace Deleted Successfully',
            'work_space_details' => 'Workspace Details',
            'delete_message' => 'Are you sure you want to delete this workspace?',
            'name' => 'Workspace Name',
            'user_id' => 'User',
            'character_count' => 'Total Character',
        ],
        'writer_template' => [
            'add' => 'Add New Writer Template',
            'edit' => 'Edit Writer Template',
            'created' => 'Writer Template Created Successfully',
            'updated' => 'Writer Template Updated Successfully',
            'deleted' => 'Writer Template Deleted Successfully',
            'writer_template_details' => 'Writer Template Details',
            'delete_message' => 'Are you sure you want to delete this Writer Template?',
            'name' => 'Writer Template Name',
            'logo' => 'Logo',
            'status' => 'Status',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'form_fields' => 'Form Fields',
            'add_form_field' => 'Add Form Field',
            'field_name' => 'Field name',
            'field_description' => 'Field Description',
            'field_type' => 'Field Type',
            'writer_category' => "Writer Category",
            'description' => 'Description',
            'prompt_text' => 'Prompt Text',
            'text' => 'Text',
            'textarea' => 'Text Area',
        ],
        'module' => [
            'name' => 'Module Name',
            'verified' => 'Verified',
            'verify_purchase_code' => 'Verify Purchase Code',
            'current_version' => 'Current Version',
            'latest_version' => 'Latest Version',
            'status' => 'Status',
            'installed_modules' => 'Installed Modules',
            'other_modules' => 'Other Modules',
            'module_status_updated' => 'Modules Status Updated',
            'downloading_completed' => 'Download Completed',
            'extract_zip_file' => 'Extract Zip File',
            'file_extracted' => 'Zip File Extracted',
        ],
        'front_setting' => [
            'seo_keywords' => 'SEO Keywords',
            'seo_description' => 'SEO Description',
        ],
        'update_app' => [
            'app_details' => 'App Details',
            'name' => 'Name',
            'value' => 'Value',
            'php_version' => 'PHP Version',
            'app_version' => 'App Version',
            'laravel_version' => 'Laravel Version',
            'mysql_version' => 'MySQL Version',
            'vue_version' => 'Vue Version',
            'update_app' => 'Update App',
            'update_now' => 'Update Now',
            'update_available' => 'Update Available',
            'verify_again' => 'Verify Again',
            'verify_failed' => 'Verification Failed',
            'verify_failed_message' => 'Your application is not registerd with us. Please verify it',
            'verified_with_other_domain' => 'Your purchase code is registerd with other doamin. Please verfiy your purhcase code',
        ],
        'langs' => [
            'add' => 'Add New Language',
            'edit' => 'Edit Language',
            'details' => 'Language Details',
            'created' => 'Language Created Successfully',
            'updated' => 'Language Updated Successfully',
            'deleted' => 'Language Deleted Successfully',
            'delete_message' => 'Are you sure you want to delete this language?',
            'view_all_langs' => 'View All Languages',
            'status_updated' => 'Langugage status updated',
            'name' => 'Name',
            'key' => 'Key',
            'flag' => 'Flag',
            'enabled' => 'Enabled',
        ],
        'translations' => [
            'fetch_new_translations' => 'Fetch New Translations',
            'reload_translations' => 'Reload Translations',
            'reload_successfully' => 'Translations Reload Successfully',
            'fetched_successfully' => 'Translations Fetch Successfully',
            'import_translations' => 'Import Translations',
        ],
        'storage_settings' => [
            'updated' => 'Storage Settings Updated',
            'storage' => 'Storage',
            'local' => 'Local',
            'aws' => 'AWS S3 Storage',
            'aws_key' => 'AWS Key',
            'aws_secret' => 'AWS Secret',
            'aws_region' => 'AWS Region',
            'aws_bucket' => 'AWS Bucket',
        ],
        'mail_settings' => [
            'updated' => 'Mail Settings Updated',
            'mail_driver' => 'Mail Driver',
            'none' => 'None',
            'mail' => 'Mail',
            'smtp' => 'SMTP',
            'from_name' => 'Mail From Name',
            'from_email' => 'Mail From Email',
            'host' => 'Host',
            'port' => 'Port',
            'encryption' => 'Encryption',
            'username' => 'Username',
            'password' => 'Password',
            'send_test_mail' => 'Send Test Mail',
            'send_mail_setting_saved' => 'Send mail setting saved',
            'enable_mail_queue' => 'Enable Mail Queue',
            'send_mail_for' => 'Send Mail For',
            'email' => 'Email address for which you want to send test mail',
            'test_mail_sent_successfully' => 'Test mail sent successfully',
            'notificaiton_will_be_sent_to_company' => 'Notification will be sent to warehouse email',
        ],
        'database_backup' => [
            'file' => 'File',
            'file_size' => 'File Size',
            'generate_backup' => 'Generate Backup',
            'delete_backup' => 'Delete Backup',
            'backup_generated_successfully' => 'Backup Generated Successfully',
            'are_you_sure_generate_backup' => 'Are you sure you want to generate database backup?',
            'are_you_sure_delete_backup' => 'Are you sure you want to delete this database backup?',
            'backup_locaion_is' => 'All generated database file will be stored in storage/app/public/backup folder. ',
            'settings' => 'Command Settings',
            'backup_command_setting' => 'Backup Command Settings',
            'mysqldump_command_path' => 'mysqldump command path',
            'command_updated' => 'Command updated successfully',
            'window_command_path' => 'If you use XAMPP then it will be => C:\xampp\mysql\bin\mysqldump.exe',
            'laragon_command_path' => 'If you use Laragon then it will be => C:\laragon\bin\mysql\mysql-5.7.24-winx64\bin\mysqldump.exe',
            'linux_command_path' => 'If you are on ubuntu or mac then run following command and enter output here => which mysqldump',
            'put_dump_path_command_on_env_file' => 'Find your MySQL dump path from below and then add it to the DUMP_PATH inside .env file',
        ],
        'messages' => [
            'somehing_went_wrong' => 'Something went wrong. Please contact to administrator.',
            'verify_success' => 'Successfully verified. Redirect to app...',
            'login_success' => 'Successfully login. Redirect to app...',
            'login_success_dashboard' => 'Successfully logged into app.',
            'click_here_to_find_purchase_code' => 'Click here to find your purchase code',
            'verification_successfull' => 'Verification successfully',
            'other_domain_linked' => 'Other domain linked',
            'other_domain_linked_with_purchase_code' => 'Other domain is already linked with your purchase code. Please enter your purchase code for more details...',
            'first_verify_module_message' => 'To enable please \n verify this module',
            'are_you_sure_install_message' => 'Are you sure you want to install?',
            'downloading_started_message' => 'Downloading started. Please wait ...',
            'file_extracting_message' => 'File extracteding. Please wait ...',
            'installation_success' => 'Installation successfully. Click here to reload page...',
            'are_you_sure_update_message' => 'Are you sure you want to update? Please take backup before update.',
            'stmp_success_message' => 'Your SMTP settings are correct..',
            'stmp_error_message' => 'Your SMTP settings are incorrect. Please update it to send mails',
            'uploading_failed' => 'Uploading failed',
            'loading_app_message' => 'Please wait... we are preparing something amazing for you',
            'fetching_product_details' => 'We are fetching product details. Please wait...',
            'product_is_upto_date' => 'You are on the latest version of app.',
            'new_app_version_avaialbe' => 'New app version {0} is available. Please update to get latest version.',
            'not_able_to_edit_order' => 'Only order status editable, other fields can not be editable becuase this order linked to some payments. Delete those payment(s) and try again.',
            'click_here_to_download_sample_file' => 'Click here to download sample csv file',
            'imported_successfully' => 'Imported Successfully',
            'company_admin_password_message' => 'Admin will login using this password. (Leave blank to keep current password)',
            'email_setting_not_configured' => 'Email setting not configured',
            'please_configure_email_settings' => 'Please configure your email settings to send emails. Click Here to configure email settings.',
            'remaining_characters' => 'Remaining Characters'
        ],
        'popover' => [
            'auto_detect_timezone' => 'Allow auto detect timezone from browser for currently logged in user.',
            'click_here_to_copy_credentials' => 'Click here to copy {0} credentials',
        ],
        'topbar_add_button' => [
            'add_staff_member' => 'Add Staff Member',
            'add_currency' => 'Add Currency',
            'add_language' => 'Add Language',
            'add_role' => 'Add Role',
        ],
    ];

    public static $eStoreTranslations = [];

    public static function getTranslationArray($moduleName)
    {
        if ($moduleName == 'Estore') {
            return self::$eStoreTranslations;
        } else if ($moduleName == 'Superadmin') {
            return \App\SuperAdmin\Classes\SuperAdminLangTrans::$mainTranslations;
        }

        return self::$mainTranslations;
    }

    public static function seedTranslations($moduleName = '')
    {
        $allLangs = Lang::all();

        $translations = self::getTranslationArray($moduleName);

        foreach ($translations as $group => $translation) {
            foreach ($translation as $transKey => $transValue) {

                foreach ($allLangs as $allLang) {
                    $translationCount = Translation::where('lang_id', $allLang->id)
                        ->where('group', $group)
                        ->where('key', $transKey)
                        ->count();

                    if ($translationCount == 0) {
                        $newTranslation = new Translation();
                        $newTranslation->lang_id = $allLang->id;
                        $newTranslation->group = $group;
                        $newTranslation->key = $transKey;
                        $newTranslation->value = $transValue;
                        $newTranslation->save();
                    }
                }
            }
        }
    }

    public static function seedMainTranslations()
    {
        // Main Module
        self::seedTranslations();

        // Seed Translation for SAAS Version
        if (app_type() == 'saas') {
            self::seedTranslations('Superadmin');
        }
    }

    public static function seedAllModulesTranslations()
    {
        // Main Module
        self::seedMainTranslations();

        $allModules = Module::all();
        foreach ($allModules as $allModule) {
            self::seedTranslations($allModule);
        }
    }
}
