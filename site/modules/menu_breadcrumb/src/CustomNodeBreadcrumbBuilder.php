<?php
/**
 * Created by PhpStorm.
 * User: Quy
 * Date: 11/25/2015
 * Time: 2:59 PM
 */

namespace Drupal\menu_breadcrumb;

use Drupal\Core\Breadcrumb\Breadcrumb;
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Link;
use Drupal\Core\Menu\MenuActiveTrailInterface;
use Drupal\Core\Menu\MenuLinkManagerInterface;
use Drupal\Core\Url;

class CustomNodeBreadcrumbBuilder implements BreadcrumbBuilderInterface {
    use StringTranslationTrait;

    /**
   * @inheritdoc
   */
    
  public function applies(RouteMatchInterface $route_match) {
    // This breadcrumb apply only for all articles

    $parameters = $route_match->getParameters()->all();
    if (isset($parameters['node'])) {
      return $parameters['node']->getType() == 'blog'
      || $parameters['node']->getType() == 'portfolio'
      || $parameters['view_id'] == 'blog';
    }
    /*if (isset($parameters['view_id'])) {
      return $parameters['view_id'] == 'blog';
    }*/
  }

  /**
   * @inheritdoc
   */
  public function build(RouteMatchInterface $route_match) {
    /*$breadcrumb = [Link::createFromRoute($this->t('Home'), '<front>')];
    kint($breadcrumb); exit;
    $breadcrumb[] = Link::createFromRoute($this->t('Blog'), '<front>');
    return $breadcrumb;*/
        $breadcrumb = new Breadcrumb();
        $breadcrumb->addCacheContexts(['route']);

        $links[] = Link::createFromRoute($this->t('Home'), '<front>');
        
        if ($route_match->getParameter('node') != null) {
                $node = $route_match->getParameter('node');
                $menu_tree = \Drupal::menuTree();
                $menu_name = 'main';
                // Build the typical default set of menu tree parameters.
                $parameters = $menu_tree->getCurrentRouteMenuTreeParameters($menu_name);
                // Load the tree based on this set of parameters.
                $tree = $menu_tree->load($menu_name, $parameters);
                // Transform the tree using the manipulators you want.
                $manipulators = array(
                  // Only show links that are accessible for the current user.
                  array('callable' => 'menu.default_tree_manipulators:checkAccess'),
                  // Use the default sorting of menu links.
                  array('callable' => 'menu.default_tree_manipulators:generateIndexAndSort'),
                );
                $tree = $menu_tree->transform($tree, $manipulators);
                // Finally, build a renderable array from the transformed tree.
                $menu = $menu_tree->build($tree);
                $menu_list = $menu['#items'];
                $node_type = ucfirst($node->getType());
                foreach($menu_list as $menu_item){
                    if(strcmp($menu_item['title'],$node_type) == 0)
                    {
                      $links[] = Link::fromTextAndUrl($menu_item['title'], $menu_item['url']);
                    } 
                 }
        }

        /*if($route_match->getParameter('view_id') != null)
        {

        }*/
              // exit;
        return $breadcrumb->setLinks($links);

  }
}