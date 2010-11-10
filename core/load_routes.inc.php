<?php

	$routes = array();
	$routes[] = array('home', '/', 'main', 'index');
	$routes[] = array('attach_link', '/attach/link/to/:target_type/:target_id', 'main', 'attachLink');
	$routes[] = array('remove_link', '/upload/remove/link/:link_id/from/other/:target_type/:target_id', 'main', 'removeLink');
	$routes[] = array('dashboard', '/dashboard', 'main', 'dashboard');
	$routes[] = array('get_javascript', '/js/:js_file', 'main', 'index');
	$routes[] = array('login', '/login', 'main', 'login');
	$routes[] = array('login_section', '/login/section/:section/*', 'main', 'login');
	$routes[] = array('openid_login', '/login/openid', 'openid', 'login');
	$routes[] = array('register1', '/register1', 'main', 'register1');
	$routes[] = array('register2', '/register2', 'main', 'register2');
	$routes[] = array('activate', '/activate/:user/:key', 'main', 'activate');
	$routes[] = array('reset_password', '/reset/password/:user/:id', 'main', 'reset');
	$routes[] = array('logout', '/logout', 'main', 'logout');
	$routes[] = array('getprojectmenustrip', '/getprojectmenustrip/on/page/:page', 'project', 'getMenustrip');
	$routes[] = array('hide_infobox', '/hide/infobox/:key', 'main', 'hideInfobox');
	$routes[] = array('getreportissuefields', '/reportissue/get/fields/for/project/*', 'main', 'reportIssueGetFields');
	$routes[] = array('reportissue', '/reportissue/*', 'main', 'reportIssue');
	$routes[] = array('findthis', '/issues/find/:searchfor/*', 'search', 'findIssues');
	$routes[] = array('search_paginated', '/issues/paginated/*', 'search', 'findIssuesPaginated');
	$routes[] = array('search_add_filter', '/issues/add/filter/*', 'search', 'addFilter');
	$routes[] = array('search', '/issues/*', 'search', 'findIssues');
	$routes[] = array('quicksearch', '/quicksearch/*', 'search', 'quickSearch');
	$routes[] = array('about', '/about', 'main', 'about');
	$routes[] = array('soap', '/soapmeup', 'soap', 'soapHandler');
	$routes[] = array('list_projects', '/list/projects/:format', 'main', 'listProjects');
	$routes[] = array('list_issuetypes', '/list/issuetypes/:format', 'main', 'listIssuetypes');
	$routes[] = array('list_fieldvalues', '/list/fieldvalues/for/field/:field_key/:format/*', 'main', 'listFieldvalues');
	$routes[] = array('wsdl', '/thebuggenie.wsdl', 'soap', 'getWSDL');
	$routes[] = array('get_partial_for_backdrop', '/get/partials/:key/*', 'main', 'getBackdropPartial');
	$routes[] = array('issue_upload', '/upload/:issue_id', 'main', 'upload', array('mode' => 'issue'));
	$routes[] = array('showfile', '/files/show/:id', 'main', 'getFile', array('mode' => 'show'));
	$routes[] = array('downloadfile', '/files/download/:id', 'main', 'getFile', array('mode' => 'download'));
	$routes[] = array('issue_upload_status', '/upload/get/status/for/issue/:issue_id', 'main', 'getUploadStatus', array('mode' => 'issue'));
	$routes[] = array('issue_detach_file', '/upload/detach/file/:file_id/from/issue/:issue_id', 'main', 'detachFile', array('mode' => 'issue'));
	$routes[] = array('issue_attach_link', '/update/attach/link/to/issue/:issue_id/*', 'main', 'attachLinkToIssue', array(), true);
	$routes[] = array('issue_vote', '/vote/for/issue/:issue_id/:vote', 'main', 'voteForIssue');
	$routes[] = array('issue_remove_link', '/upload/remove/link/:link_id/from/issue/:issue_id', 'main', 'removeLinkFromIssue');
	$routes[] = array('upload_status', '/upload/get/status/for/:mode', 'main', 'getUploadStatus');
	$routes[] = array('upload', '/upload/:mode', 'main', 'upload');
	$routes[] = array('account_change_password', '/my_account/change/password/*', 'main', 'accountChangePassword', array(), true);
	$routes[] = array('account_save_information', '/my_account/save/information/*', 'main', 'myAccount', array('mode' => 'information'), true);
	$routes[] = array('account_save_settings', '/my_account/save/settings/*', 'main', 'myAccount', array('mode' => 'settings'), true);
	$routes[] = array('account_save_module_settings', '/my_account/save/module/:target_module/settings/*', 'main', 'myAccount', array('mode' => 'module'), true);
	$routes[] = array('account', '/my_account/*', 'main', 'myAccount');
	$routes[] = array('toggle_friend', '/friends/:mode/:user_id', 'main', 'toggleFriend');
	$routes[] = array('configure', '/configure', 'configuration', 'index', array('section' => 0));
	$routes[] = array('configure_projects', '/configure/projects', 'configuration', 'configureProjects', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_projects_add_project', '/configure/projects/add/new', 'configuration', 'addProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_settings', '/configure/project/:project_id/settings', 'configuration', 'configureProjectSettings', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_delete', '/configure/project/:project_id/delete', 'configuration', 'deleteProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_developers', '/configure/project/:project_id/developers', 'configuration', 'configureProjectDevelopers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_set_leadby', '/configure/project/:project_id/set/:field/*', 'configuration', 'setItemLead', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'item_type' => 'project'));
	$routes[] = array('configure_project_find_assignee', '/configure/project/:project_id/find/assignee/by/*', 'configuration', 'findAssignee', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_add_assignee', '/configure/project/:project_id/add/:assignee_type/:assignee_id/*', 'configuration', 'assignToProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'user'));
	$routes[] = array('configure_projects_add_edition', '/configure/project/:project_id/add/edition', 'configuration', 'addEdition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_projects_add_component', '/configure/project/:project_id/add/component', 'configuration', 'addComponent', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_projects_add_build', '/configure/project/:project_id/add/build', 'configuration', 'addBuild', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_build_action', '/configure/build/:build_id/do/:build_action', 'configuration', 'buildAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_edition_set_leadby', '/configure/project/:project_id/edition/:edition_id/set/:field/*', 'configuration', 'setItemLead', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'item_type' => 'edition'));
	$routes[] = array('configure_edition_add_build', '/configure/project/:project_id/edition/:edition_id/add/build', 'configuration', 'addBuild', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_edition_add_component', '/configure/project/:project_id/edition/:edition_id/add/component/:component_id', 'configuration', 'editEditionComponent', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'add'));
	$routes[] = array('configure_edition_remove_component', '/configure/project/:project_id/edition/:edition_id/remove/component/:component_id', 'configuration', 'editEditionComponent', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'remove'));
	$routes[] = array('configure_update_component', '/configure/component/:component_id/update', 'configuration', 'editComponent', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'update'));
	$routes[] = array('configure_component_set_assignedto', '/configure/project/:project_id/component/:component_id/set/:field/*', 'configuration', 'setItemLead', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'item_type' => 'component'));
	$routes[] = array('configure_delete_component', '/configure/component/:component_id/delete', 'configuration', 'editComponent', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'delete'));
	$routes[] = array('configure_project_editions_components', '/configure/project/:project_id/editions_and_components', 'configuration', 'configureProjectEditionsAndComponents', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_other', '/configure/project/:project_id/other', 'configuration', 'configureProjectOther', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_updateother', '/configure/project/:project_id/update/other', 'configuration', 'configureProjectUpdateOther', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_edition', '/configure/project/:project_id/edition/:edition_id', 'configuration', 'configureProjectEdition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'format' => 'json'));
	$routes[] = array('configure_project', '/configure/project/:project_id/hierarchy', 'configuration', 'configureProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'format' => 'json'));
	$routes[] = array('configure_settings', '/configure/settings', 'configuration', 'settings', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_SETTINGS));
	$routes[] = array('configure_scopes', '/configure/scopes', 'configuration', 'index', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_SCOPES));
	$routes[] = array('configure_workflow', '/configure/workflow', 'configuration', 'configureWorkflows', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_schemes', '/configure/workflow/schemes', 'configuration', 'configureWorkflowSchemes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_scheme', '/configure/workflow/scheme/:scheme_id', 'configuration', 'configureWorkflowScheme', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_steps', '/configure/workflow/:workflow_id/steps', 'configuration', 'configureWorkflowSteps', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_step', '/configure/workflow/:workflow_id/step/:step_id', 'configuration', 'configureWorkflowStep', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_add_transition', '/configure/workflow/:workflow_id/add/transition/to/step/:step_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'add'));
	$routes[] = array('configure_workflow_delete_step_transitions', '/configure/workflow/:workflow_id/delete/all/outgoing/transitions/from/step/:step_id', 'configuration', 'configureWorkflowStep', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'delete_outgoing_transitions'));
	$routes[] = array('configure_workflow_delete_transition', '/configure/workflow/:workflow_id/delete/transition/:transition_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'delete'));
	$routes[] = array('configure_workflow_transition', '/configure/workflow/:workflow_id/transition/:transition_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_workflows', '/configure/workflow/workflows', 'configuration', 'configureWorkflows', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_files', '/configure/files', 'configuration', 'configureUploads', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_UPLOADS));
	$routes[] = array('configure_permissions', '/configure/permissions', 'configuration', 'configurePermissions', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS));
	$routes[] = array('configure_permissions_get_configurator', '/configure/permissions/get/configurator/*', 'configuration', 'getPermissionsConfigurator', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS));
	$routes[] = array('configure_permissions_get_permissions', '/configure/permissions/get/permissions/*', 'configuration', 'getPermissionsInfo', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS));
	$routes[] = array('permissions_set_denied', '/configure/permissions/set/permission/denied/for/:target_module/:key/:target_id/:target_type/:item_id/:template_mode', 'configuration', 'setPermission', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS, 'mode' => 'denied'));
	$routes[] = array('permissions_set_allowed', '/configure/permissions/set/permission/allowed/for/:target_module/:key/:target_id/:target_type/:item_id/:template_mode', 'configuration', 'setPermission', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS, 'mode' => 'allowed'));
	$routes[] = array('permissions_set_unset', '/configure/permissions/unset/permission/for/:target_module/:key/:target_id/:target_type/:item_id/:template_mode', 'configuration', 'setPermission', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS, 'mode' => 'unset'));
	$routes[] = array('configure_import', '/configure/import', 'configuration', 'index', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_IMPORT));
	$routes[] = array('configure_project_milestones', '/configure/milestones/for/project/:project_id', 'configuration', 'configureProjectMilestones', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_projects_add_milestone', '/configure/project/:project_id/add/milestone', 'configuration', 'addMilestone', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_milestone_action', '/configure/project/:project_id/milestone/:milestone_id/do/:milestone_action', 'configuration', 'milestoneAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_issuetypes', '/configure/issuetypes', 'configuration', 'configureIssuetypes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES));
	$routes[] = array('configure_issuetypes_add', '/configure/issuefields/add/issuetype', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'add'));
	$routes[] = array('configure_issuetypes_getoptions', '/configure/issuetypes/get/options/for/:id', 'configuration', 'configureIssuetypesGetOptions', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES));
	$routes[] = array('configure_issuetypes_update_choices', '/configure/issuetypes/update/choices/for/:id', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'updatechoices'));
	$routes[] = array('configure_issuetypes_update_issuetype', '/configure/issuefields/update/issuetype/:id', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'update'));
	$routes[] = array('configure_issuefields', '/configure/issuefields', 'configuration', 'configureIssuefields', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS));
	$routes[] = array('configure_issuefields_getoptions', '/configure/issuefields/get/options/for/:type', 'configuration', 'configureIssuefieldsGetOptions', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS));
	$routes[] = array('configure_issuefields_edit', '/configure/issuefields/edit/:type/:id', 'configuration', 'configureIssuefieldsAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'edit'));
	$routes[] = array('configure_issuefields_add', '/configure/issuefields/add/:type', 'configuration', 'configureIssuefieldsAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'add'));
	$routes[] = array('configure_issuefields_delete', '/configure/issuefields/delete/:type/:id', 'configuration', 'configureIssuefieldsAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'delete'));
	$routes[] = array('configure_issuefields_getpermissions', '/configure/issuefields/get/permissions/for/:type/:id', 'configuration', 'configureIssuefieldsGetPermissions', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS));
	$routes[] = array('configure_issuefields_add_customtype', '/configure/issuefields/add/custom/type', 'configuration', 'configureIssuefieldsCustomTypeAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'add'));
	$routes[] = array('configure_issuefields_update_customtype', '/configure/issuefields/update/custom/type/:type', 'configuration', 'configureIssuefieldsCustomTypeAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'update'));
	$routes[] = array('configure_issuefields_delete_customtype', '/configure/issuefields/delete/custom/type/:type', 'configuration', 'configureIssuefieldsCustomTypeAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'delete'));
	$routes[] = array('configure_users', '/configure/users', 'configuration', 'configureUsers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_users_find_user', '/configure/users/find/users/*', 'configuration', 'findUsers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_users_add_user', '/configure/users/add/user', 'configuration', 'addUser', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_users_add_group', '/configure/users/add/group', 'configuration', 'addGroup', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'new'));
	$routes[] = array('configure_users_clone_group', '/configure/users/clone/group/:group_id', 'configuration', 'addGroup', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'clone'));
	$routes[] = array('configure_users_delete_group', '/configure/users/delete/group/:group_id', 'configuration', 'deleteGroup', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_get_group_members', '/configure/users/get/members/in/group/:group_id', 'configuration', 'getGroupMembers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_add_team', '/configure/users/add/team', 'configuration', 'addTeam', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'new'));
	$routes[] = array('configure_users_clone_team', '/configure/users/clone/team/:team_id', 'configuration', 'addTeam', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'clone'));
	$routes[] = array('configure_users_delete_team', '/configure/users/delete/team/:team_id', 'configuration', 'deleteTeam', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_get_team_members', '/configure/users/get/members/in/team/:team_id', 'configuration', 'getTeamMembers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_update_user', '/configure/users/update/user/:user_id', 'configuration', 'updateUser', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_modules', '/configure/modules', 'configuration', 'configureModules', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES));
	$routes[] = array('configure_disable_module', '/configure/modules/disable/:module_key', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'disable'));
	$routes[] = array('configure_enable_module', '/configure/modules/enable/:module_key', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'enable'));
	$routes[] = array('configure_uninstall_module', '/configure/modules/uninstall/:module_key', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'uninstall'));
	$routes[] = array('configure_install_module', '/configure/modules/install', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'install'));
	$routes[] = array('configure_module', '/configure/module/:config_module', 'configuration', 'configureModule', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES));
	$routes[] = array('configure_get_permissions', '/configure/permissions/:permissions_type/for/:permissions_target_type/:permissions_target', 'configuration', 'getPermissions', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS));
	$routes[] = array('comment_delete', '/comment/delete/:comment_id', 'main', 'deletecomment');
	$routes[] = array('comment_update', '/comment/update/:comment_id', 'main', 'updatecomment');
	$routes[] = array('comment_add', '/comment/add/for/project/:project_id/module/:comment_module/item/type/:comment_applies_type/id/:comment_applies_id', 'main', 'addcomment');
	$routes[] = array('confirm_affected', '/issue/:issue_id/confirm/:affected_type/:affected_id', 'main', 'toggleaffectedconfirmed');
	$routes[] = array('remove_affected', '/issue/:issue_id/remove/:affected_type/:affected_id', 'main', 'removeaffected');
	$routes[] = array('captcha', '/captcha/*', 'main', 'captcha');
	
	foreach ($routes as $route)
	{
		call_user_func_array(array(TBGContext::getRouting(), 'addRoute'), $route);
	}
