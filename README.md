# wp-post-type-generator

*A simple generator for WordPress custom post types*

## Usage
```
block('wp-post-type-generator', ['@list' => $names])
```

where ```$names``` is an array of the names of the post types you wish to create.

### Caveats
Currently this block only creates post types with the following defaults:

```
    $prop = 'Your post type name'; // Handled internally by the block
    $text_domain = 'your-plugin-textdomain';
    $labels = [
        'name'               => _x( $prop, 'post type general name', $text_domain ),
        'singular_name'      => _x( $prop, 'post type singular name', $text_domain ),
        'menu_name'          => _x( $prop, 'admin menu', $text_domain ),
        'name_admin_bar'     => _x( $prop, 'add new on admin bar', $text_domain ),
        'add_new'            => _x( 'Add New', strtolower($prop), $text_domain ),
        'add_new_item'       => __( 'Add New ' . $prop, $text_domain ),
        'new_item'           => __( 'New ' . $prop, $text_domain ),
        'edit_item'          => __( 'Edit ' . $prop, $text_domain ),
        'view_item'          => __( 'View ' . $prop, $text_domain ),
        'all_items'          => __( 'All ' . $prop, $text_domain ),
        'search_items'       => __( 'Search ' . $prop, $text_domain ),
        'parent_item_colon'  => __( 'Parent ' . $prop . ':', $text_domain ),
        'not_found'          => __( 'No ' . strtolower($prop) . ' found.', $text_domain ),
        'not_found_in_trash' => __( 'No ' . strtolower($prop) . ' found in Trash.', $text_domain )
    ];
    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => strtolower($prop )),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    ]
```


