<?php
namespace FileBird\Classes;

defined('ABSPATH') || exit;

use FileBird\Model\Folder as FolderModel;

class Tree {

    public static function getFolders($order_by = null, $flat = false, $level = 0, $show_level = false) {
        $folders_from_db = FolderModel::allFolders('*', null, $order_by);
        $default_folders = array();
        
        $tree = self::getTree($folders_from_db, 0, $default_folders, $flat, $level, $show_level);
        return $tree;
    }
    public static function getCount($folder_id) {
        $accepted_status = array('inherit', 'private');
        $args = array(
          'post_type' => 'attachment',
          'post_status' => $accepted_status,
          'posts_per_page' => -1
        );
        $in_not_in = FolderModel::getInAndNotInIds($folder_id);
        $args['post__not_in'] = $in_not_in['post__not_in'];
        $args['post__in'] = $in_not_in['post__in'];
        $args['fbv_count'] = true;
        
        $query = new \WP_Query($args);
        $count = $query->found_posts;
        wp_reset_postdata();
        return $count;
    }
    private static function getTree($data, $parent = 0, $default = null,  $flat = false, $level = 0, $show_level = false) {
      $tree = is_null($default) ? array() : $default;
      foreach($data as $k => $v) {
        if($v->parent == $parent) {
          $children = self::getTree($data, $v->id, null, $flat, $level + 1, $show_level);
          $f = array(
            'id' => (int)$v->id,
            'text' => $show_level ? str_repeat('-', $level) . $v->name : $v->name,
            'li_attr' => array("data-count" => self::getCount((int)$v->id), "data-parent" => (int)$parent),
            'count' => self::getCount((int)$v->id)
          );
           
          if($flat === true) {
            $tree[] = $f;
            foreach ($children as $k2 => $v2) {
              $tree[] = $v2;
            }
          } else {
            $f['children'] = $children;
            $tree[] = $f;
          }
        }
      }
      return $tree;
  }

}