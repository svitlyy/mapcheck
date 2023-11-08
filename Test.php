<?php

namespace Services\Map;

class Test extends \Tools\CommonCore\SmartWebsiteService
{
    public function index()
    {
        $modules = ['tab1', 'tab2', 'tab3', 'tab4', 'tab5', 'tab6'];
        foreach ($modules as $module) {
            $this->data[$module] = $this->check_access($module, 'edit');
        }
        echo $this->view->render_to_var($this->data, 'Pages/mlists/map_view_test.php', $template_folder = 'inside_admin_template');
    }

    public function check_access($module_name, $type)
    {

        $db =& $GLOBALS['Commons']['db'];
        $user =& $GLOBALS['Commons']['user'];
        $auth =& $GLOBALS['Commons']['auth'];

        if (!isset($user['id'])) exit('No User!<script>location.href = \'/auth/page/login\'</script>');

        $user_id = $user['id'];

        $type_clear = '';
        if ($type == 'init') $type_clear = 'init';
        if ($type == 'view') $type_clear = 'view';
        if ($type == 'edit') $type_clear = 'edit';
        $sql = "
            SELECT
            	top_menu_url as url

				FROM inside_top_menu

				LEFT JOIN inside_groups_access ON inside_groups_access.module_id = top_menu_id
				LEFT JOIN auth_users_groups ON auth_users_groups.group_id = inside_groups_access.group_id

				WHERE

				auth_users_groups.user_id = " . intval($user_id) . "

				AND module_" . $type_clear . " = 1

				AND top_menu_module_name = " . $db->quote($module_name) . "

				GROUP BY top_menu_id

				ORDER BY inside_top_menu.top_menu_name

        ";
        $res = $db->sql_get_data($sql);


        if (isset($res[0]) or $auth->is_admin()) return 1;
        else {
            return 0;
        }
    }
}