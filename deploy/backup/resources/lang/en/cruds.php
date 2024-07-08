<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'phone'                    => 'Phone',
            'phone_helper'             => ' ',
            'picture'                  => 'Picture',
            'picture_helper'           => ' ',
            'job_type'                 => 'Job Type',
            'job_type_helper'          => ' ',
            'office'                   => 'Office',
            'office_helper'            => ' ',
            'can_see_prices'           => 'Can See Prices',
            'can_see_prices_helper'    => ' ',
            'can_set_prices'           => 'Can Set Prices',
            'can_set_prices_helper'    => ' ',
            'is_super'                 => 'Is Super',
            'is_super_helper'          => ' ',
        ],
    ],
    'country' => [
        'title'          => 'Countries',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'short_code'        => 'Short Code',
            'short_code_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'code_inc'          => 'Code Inc',
            'code_inc_helper'   => ' ',
        ],
    ],
    'province' => [
        'title'          => 'Province',
        'title_singular' => 'Province',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'basicCRM' => [
        'title'          => 'Basic CRM',
        'title_singular' => 'Basic CRM',
    ],
    'crmStatus' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'color'             => 'Color',
            'color_helper'      => 'Sample: #FFFFFF',
        ],
    ],
    'crmCustomer' => [
        'title'          => 'Customers',
        'title_singular' => 'Customer',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'first_name'         => 'Name',
            'first_name_helper'  => ' ',
            'last_name'          => 'Last name',
            'last_name_helper'   => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'email'              => 'Email',
            'email_helper'       => ' ',
            'phone'              => 'Phone',
            'phone_helper'       => ' ',
            'address'            => 'Address',
            'address_helper'     => ' ',
            'skype'              => 'Skype',
            'skype_helper'       => ' ',
            'website'            => 'Website',
            'website_helper'     => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
            'birthday'           => 'Birthday',
            'birthday_helper'    => ' ',
            'city'               => 'City',
            'city_helper'        => ' ',
            'campaign'           => 'Campaign',
            'campaign_helper'    => ' ',
            'user'               => 'User',
            'user_helper'        => ' ',
        ],
    ],
    'crmNote' => [
        'title'          => 'Notes',
        'title_singular' => 'Note',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => ' ',
            'note'              => 'Note',
            'note_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'crmDocument' => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'customer'             => 'Customer',
            'customer_helper'      => ' ',
            'document_file'        => 'File',
            'document_file_helper' => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => ' ',
            'user'                 => 'User',
            'user_helper'          => ' ',
            'status'               => 'Status',
            'status_helper'        => ' ',
        ],
    ],
    'faqManagement' => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'taskManagement' => [
        'title'          => 'Task management',
        'title_singular' => 'Task management',
    ],
    'taskStatus' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'color'             => 'Color',
            'color_helper'      => ' ',
        ],
    ],
    'taskTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'task' => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Title',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'attachment'         => 'Attachment',
            'attachment_helper'  => ' ',
            'due_date'           => 'Due date',
            'due_date_helper'    => ' ',
            'assigned_to'        => 'Assigned to',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
            'emergency'          => 'Emergency',
            'emergency_helper'   => ' ',
            'user'               => 'User',
            'user_helper'        => ' ',
        ],
    ],
    'tasksCalendar' => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'definition' => [
        'title'          => 'Definition',
        'title_singular' => 'Definition',
    ],
    'campaignChannel' => [
        'title'          => 'Campaign Channels',
        'title_singular' => 'Campaign Channel',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'campaignOrg' => [
        'title'          => 'Campaign Org',
        'title_singular' => 'Campaign Org',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'channel'           => 'Channel',
            'channel_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'started_at'        => 'Started At',
            'started_at_helper' => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
        ],
    ],
    'translator' => [
        'title'          => 'Translator',
        'title_singular' => 'Translator',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'city'              => 'City',
            'city_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
        ],
    ],
    'ministry' => [
        'title'          => 'Ministries',
        'title_singular' => 'Ministry',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'code_inc'          => 'Code Inc',
            'code_inc_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                               => 'ID',
            'id_helper'                        => ' ',
            'central_hospital_mail'            => 'Central Hospital Mail',
            'central_hospital_mail_helper'     => 'comma separator',
            'central_hospital_mail_cc'         => 'Central Hospital Mail Cc',
            'central_hospital_mail_cc_helper'  => ' ',
            'central_hospital_mail_bcc'        => 'Central Hospital Mail Bcc',
            'central_hospital_mail_bcc_helper' => ' ',
            'created_at'                       => 'Created at',
            'created_at_helper'                => ' ',
            'updated_at'                       => 'Updated at',
            'updated_at_helper'                => ' ',
            'deleted_at'                       => 'Deleted at',
            'deleted_at_helper'                => ' ',
        ],
    ],
    'travelGroup' => [
        'title'          => 'Travel Groups',
        'title_singular' => 'Travel Group',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'color'             => 'Color',
            'color_helper'      => '#AA0000',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'department' => [
        'title'          => 'Departments',
        'title_singular' => 'Department',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'office' => [
        'title'          => 'Offices',
        'title_singular' => 'Office',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'fax'               => 'Fax',
            'fax_helper'        => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'city'              => 'City',
            'city_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'hospital' => [
        'title'          => 'Hospitals',
        'title_singular' => 'Hospital',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'fax'               => 'Fax',
            'fax_helper'        => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'doctor' => [
        'title'          => 'Doctors',
        'title_singular' => 'Doctor',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'city'              => 'City',
            'city_helper'       => ' ',
            'hospital'          => 'Hospital',
            'hospital_helper'   => ' ',
            'department'        => 'Department',
            'department_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'patient' => [
        'title'          => 'Patients',
        'title_singular' => 'Patient',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
            'office'                 => 'Office',
            'office_helper'          => ' ',
            'campaign_org'           => 'Campaign Org',
            'campaign_org_helper'    => ' ',
            'city'                   => 'City',
            'city_helper'            => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'middle_name'            => 'Middle Name',
            'middle_name_helper'     => ' ',
            'surname'                => 'Surname',
            'surname_helper'         => ' ',
            'mother_name'            => 'Mother Name',
            'mother_name_helper'     => ' ',
            'father_name'            => 'Father Name',
            'father_name_helper'     => ' ',
            'citizenship'            => 'Citizenship',
            'citizenship_helper'     => ' ',
            'passport_no'            => 'Passport No',
            'passport_no_helper'     => ' ',
            'passport_origin'        => 'Passport Origin',
            'passport_origin_helper' => ' ',
            'phone'                  => 'Phone',
            'phone_helper'           => ' ',
            'foriegn_phone'          => 'Foriegn Phone',
            'foriegn_phone_helper'   => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
            'gender'                 => 'Gender',
            'gender_helper'          => ' ',
            'birthday'               => 'Birthday',
            'birthday_helper'        => ' ',
            'birth_place'            => 'Birth Place',
            'birth_place_helper'     => ' ',
            'address'                => 'Address',
            'address_helper'         => ' ',
            'weight'                 => 'Weight',
            'weight_helper'          => ' ',
            'height'                 => 'Height',
            'height_helper'          => ' ',
            'blood_group'            => 'Blood Group',
            'blood_group_helper'     => ' ',
            'code'                   => 'Code',
            'code_helper'            => ' ',
            'photo'                  => 'Photo',
            'photo_helper'           => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'treating_doctor'        => 'Treating Doctor',
            'treating_doctor_helper' => ' ',
            'passport_image'         => 'Passport Image',
            'passport_image_helper'  => ' ',
        ],
    ],
    'coordination' => [
        'title'          => 'Coordinations',
        'title_singular' => 'Coordination',
    ],
    'travel' => [
        'title'          => 'Travels',
        'title_singular' => 'Travel',
        'fields'         => [
            'id'                             => 'ID',
            'id_helper'                      => ' ',
            'patient'                        => 'Patient',
            'patient_helper'                 => ' ',
            'group'                          => 'Group',
            'group_helper'                   => ' ',
            'hospital'                       => 'Hospital',
            'hospital_helper'                => ' ',
            'department'                     => 'Department',
            'department_helper'              => ' ',
            'attendant_name'                 => 'Attendant Name',
            'attendant_name_helper'          => ' ',
            'attendant_address'              => 'Attendant Address',
            'attendant_address_helper'       => ' ',
            'attendant_phone'                => 'Attendant Phone',
            'attendant_phone_helper'         => ' ',
            'has_pestilence'                 => 'Has Pestilence',
            'has_pestilence_helper'          => ' ',
            'hospitalization_date'           => 'Hospitalization Date',
            'hospitalization_date_helper'    => ' ',
            'planning_discharge_date'        => 'Planning Discharge Date',
            'planning_discharge_date_helper' => ' ',
            'arrival_date'                   => 'Arrival Date',
            'arrival_date_helper'            => ' ',
            'departure_date'                 => 'Departure Date',
            'departure_date_helper'          => ' ',
            'wants_shopping'                 => 'Wants Shopping',
            'wants_shopping_helper'          => ' ',
            'visa_status'                    => 'Visa Status',
            'visa_status_helper'             => ' ',
            'visa_start_date'                => 'Visa Start Date',
            'visa_start_date_helper'         => ' ',
            'visa_end_date'                  => 'Visa End Date',
            'visa_end_date_helper'           => ' ',
            'created_at'                     => 'Created at',
            'created_at_helper'              => ' ',
            'updated_at'                     => 'Updated at',
            'updated_at_helper'              => ' ',
            'deleted_at'                     => 'Deleted at',
            'deleted_at_helper'              => ' ',
            'reffering_type'                 => 'Reffering Type',
            'reffering_type_helper'          => ' ',
            'reffering'                      => 'Reffering',
            'reffering_helper'               => ' ',
            'last_status'                    => 'Last Status',
            'last_status_helper'             => ' ',
            'hospital_mail_notify'           => 'Hospital Mail Notify',
            'hospital_mail_notify_helper'    => ' ',
            'notify_hospitals'               => 'Notify Hospitals',
            'notify_hospitals_helper'        => ' ',
        ],
    ],
    'travelTreatmentActivity' => [
        'title'          => 'Travel Treatment Activity',
        'title_singular' => 'Travel Treatment Activity',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'user'                  => 'User',
            'user_helper'           => ' ',
            'travel'                => 'Travel',
            'travel_helper'         => ' ',
            'description'           => 'Description',
            'description_helper'    => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'status'                => 'Status',
            'status_helper'         => ' ',
            'treatment_file'        => 'Treatment File',
            'treatment_file_helper' => ' ',
        ],
    ],
    'activity' => [
        'title'          => 'Activity',
        'title_singular' => 'Activity',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'user'                 => 'User',
            'user_helper'          => ' ',
            'travel'               => 'Travel',
            'travel_helper'        => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'status'               => 'Status',
            'status_helper'        => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'document_file'        => 'Document File',
            'document_file_helper' => ' ',
            'document_name'        => 'Document Name',
            'document_name_helper' => ' ',
        ],
    ],
    'travelStatus' => [
        'title'          => 'Travel Status',
        'title_singular' => 'Travel Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'ordering'          => 'Ordering',
            'ordering_helper'   => ' ',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentPage' => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title'                 => 'Title',
            'title_helper'          => ' ',
            'category'              => 'Categories',
            'category_helper'       => ' ',
            'tag'                   => 'Tags',
            'tag_helper'            => ' ',
            'page_text'             => 'Full Text',
            'page_text_helper'      => ' ',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'hotel' => [
        'title'          => 'Hotel',
        'title_singular' => 'Hotel',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'location'          => 'Location',
            'location_helper'   => 'https://maps.app.goo.gl/AbR3D7knLcMae8b99',
            'price'             => 'Price',
            'price_helper'      => 'currency turkish lira ₺',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'city'              => 'City',
            'city_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'travelHospital' => [
        'title'          => 'Travel Hospital',
        'title_singular' => 'Travel Hospital',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'email'             => 'Email',
            'email_helper'      => 'comma separator Example: info@gmail.com, amir@gmail.com',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'finance' => [
        'title'          => 'Finance',
        'title_singular' => 'Finance',
    ],
    'expensesIncome' => [
        'title'          => 'Expenses Income',
        'title_singular' => 'Expenses Income',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'user'               => 'User',
            'user_helper'        => ' ',
            'category'           => 'Category',
            'category_helper'    => ' ',
            'patient'            => 'Patient',
            'patient_helper'     => ' ',
            'department'         => 'Department',
            'department_helper'  => ' ',
            'amount'             => 'Amount',
            'amount_helper'      => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],

];