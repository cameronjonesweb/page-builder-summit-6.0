<?php
/**
 * Plugin Name: Block Templates
 */

add_filter(
	'register_post_type_args',
	function( $args, $post_type ) {

		if ( 'post' === $post_type ) {
			$args['template'] = array(
				// cover block.
				array(
					'core/cover',
					array(
						'useFeaturedImage' => true,
						'dimRatio'         => 50,
						'overlayColor'     => 'base',
						'minHeight'        => 100,
						'minHeightUnit'    => 'vh',
						'templateLock'     => 'all',
						'lock'             => array(
							'move'   => true,
							'remove' => true,
						),
						'align'            => 'full',
						'style'            => array(
							'spacing' => array(
								'padding' => array(
									'top'    => 'var:preset|spacing|40',
									'bottom' => 'var:preset|spacing|40',
								),
							),
						),
						'textColor'        => 'contrast',
						'layout'           => array(
							'type' => 'constrained',
						),
					),
					array(
						array(
							'core/post-title',
							array(
								'textAlign' => 'center',
								'level'     => 1,
								'style'     => array(
									'typography' => array(
										'textTransform' => 'capitalize',
									),
								),
							),
						),
						array(
							'core/heading',
							array(
								'textAlign' => 'center',
								'style'     => array(
									'typography' => array(
										'textTransform' => 'capitalize',
									),
								),
								'fontSize'  => 'medium',
								'content'   => 'My Subheading',
							),
						),
					),
				),
				// intro paragraph.
				array(
					'core/paragraph',
					array(
						'fontSize' => 'large',
						'content'  => '<em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In neque massa, ultrices euismod convallis eu, pellentesque ac elit. </em>',
					),
				),
				// main paragraph.
				array(
					'core/paragraph',
					array(
						'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In neque massa, ultrices euismod convallis eu, pellentesque ac elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam vestibulum, massa at venenatis ornare, nisi quam hendrerit lorem, eget aliquet quam eros sed sapien. Nulla ante nunc, hendrerit vitae auctor vitae, euismod tincidunt odio. Nullam ex dui, iaculis quis lacus vitae, iaculis convallis justo. Etiam pulvinar, nibh euismod sodales blandit, enim nulla aliquam est, eu molestie neque sem non risus. Duis lorem dui, malesuada eu turpis quis, sagittis lobortis enim. Fusce hendrerit, nisi et tempus ultrices, enim urna rutrum tortor, convallis ullamcorper mi dui et quam. Proin cursus venenatis faucibus.',
					),
				),
				// main paragraph.
				array(
					'core/paragraph',
					array(
						'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In neque massa, ultrices euismod convallis eu, pellentesque ac elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam vestibulum, massa at venenatis ornare, nisi quam hendrerit lorem, eget aliquet quam eros sed sapien. Nulla ante nunc, hendrerit vitae auctor vitae, euismod tincidunt odio. Nullam ex dui, iaculis quis lacus vitae, iaculis convallis justo. Etiam pulvinar, nibh euismod sodales blandit, enim nulla aliquam est, eu molestie neque sem non risus. Duis lorem dui, malesuada eu turpis quis, sagittis lobortis enim. Fusce hendrerit, nisi et tempus ultrices, enim urna rutrum tortor, convallis ullamcorper mi dui et quam. Proin cursus venenatis faucibus.',
					),
				),
				// call to action.
				array(
					'core/pattern',
					array(
						'slug' => 'simple-call-to-action',
						'templateLock'     => 'all',
						'lock'             => array(
							'move'   => true,
							'remove' => true,
						),
					),
				),
			);
		} elseif ( 'video' === $post_type ) {
			$args['template'] = array(
				// youtube embed block.
				array(
					'core/embed',
					array(
						'providerNameSlug' => 'youtube',
						'responsive'       => true,
					),
				),
			);
			$args['template_lock'] = true;
		}

		return $args;
	},
	10,
	2
);
