<?php
namespace Elementor;

class MY_Elementor_Food_Pricing extends Widget_Base {

    public function get_name() {
        return  'my_food_pricing';
    }

    public function get_title() {
        return esc_html__( 'MMI Food Pricing', 'majharul_islam' );
    }

    public function get_script_depends() {
        return [
            'myew-script'
        ];
    }

    public function get_icon() {
        return 'eicon-price-list';
    }

    public function get_categories() {
        return [ 'my_catagory' ];
    }


    public function _register_controls() {

        $this->start_controls_section(
            'food_content_section',
            [
                'label' => __( 'Food Content', 'MMI Addons' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'food_timing',
            [
                'label' => __( 'Food Timing', 'majharul_islam' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'good morning', 'majharul_islam' ),
                'show_label' => true,
                'placeholder' => __( 'Type your food time', 'majharul_islam' ),
            ]
        );

        $this->add_control(
            'food_title',
            [
                'label' => __( 'Food Title', 'majharul_islam' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'BREAKFAST DEAL', 'majharul_islam' ),
                'placeholder' => __( 'Type your food title here', 'majharul_islam' ),
            ]
        );

        $this->add_control(
            'food_price',
            [
                'label' => __( 'Food Price', 'majharul_islam' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( '$20', 'majharul_islam' ),
                'show_label' => true,
                'placeholder' => __( 'Type your food price here', 'majharul_islam' ),
            ]
        );

        $this->add_control(
            'pricing_time',
            [
                'label' => __( 'Pricing Time', 'majharul_islam' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'day', 'majharul_islam' ),
                'show_label' => true,
                'placeholder' => __( 'Type your price time here', 'majharul_islam' ),
            ]
        );

        $this->add_control(
            'food_order_btn',
            [
                'label' => __( 'Button Text', 'majharul_islam' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Order now', 'majharul_islam' ),
                'show_label' => true,
                'placeholder' => __( 'Type your button text', 'majharul_islam' ),
            ]
        );

        $this->add_control(
            'food_order_btn_link',
            [
                'label' => __( 'Button Link', 'majharul_islam' ),
                'type' => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'majharul_islam' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();

        // Style Tab
        $this->style_tab();
    }

    private function style_tab() {

        $this->start_controls_section(
            'food_image_section',
            [
                'label' => __( 'Food Image', 'MMI Addons' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'food_image_bg',
                'label' => __( 'Choose Image', 'majharul_islam' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .pricing_image',
            ]
        );

        $this->end_controls_section();

        // Food Timing
        $this->start_controls_section(
            'food_timing_sec_style',
            [
                'label' => __( 'Food Time', 'MMI Addons' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            // start Normal control tabs
            $this->start_controls_tabs(
                'food_time_style_tabs'
            );

            $this->start_controls_tab(
                'food_time_style_normal_tab',
                [
                    'label' => __( 'Normal', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_timing_color',
                [
                    'label' => __( 'Color', 'majharul_islam' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text h3' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'food_timing_typography',
                    'label' => __( 'Typography', 'majharul_islam' ),
                    'selector' => '{{WRAPPER}} .pricing_image_text h3',
                ]
            );
            $this->end_controls_tab();

            // Start Hover control tab
            $this->start_controls_tab(
                'food_time_style_hover_tab',
                [
                    'label' => __( 'Hover', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_timing_hover_style',
                [
                    'label' => __( 'Color', 'majharul_islam' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text:hover h3' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->end_controls_tab();

            $this->end_controls_tabs();

        $this->end_controls_section();


        // Food Title style
        $this->start_controls_section(
            'food_title_sec_style',
            [
                'label' => __( 'Food Title', 'MMI Addons' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            // start Normal control tabs
            $this->start_controls_tabs(
                'title_style_tabs'
            );

            $this->start_controls_tab(
                'title_style_normal_tab',
                [
                    'label' => __( 'Normal', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_title_color',
                [
                    'label' => __( 'Color', 'majharul_islam' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text h2' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'food_title_typography',
                    'label' => __( 'Typography', 'majharul_islam' ),
                    'selector' => '{{WRAPPER}} .pricing_image_text h2',
                ]
            );

            $this->add_control(
                'food_title_margin',
                [
                    'label' => __( 'Margin', 'majharul_islam' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();

            // Start Hover control tab
            $this->start_controls_tab(
                'title_style_hover_tab',
                [
                    'label' => __( 'Hover', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_title_hover_style',
                [
                    'label' => __( 'Color', 'majharul_islam' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text:hover h2' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->end_controls_tab();

            $this->end_controls_tabs();

        $this->end_controls_section();

        // Food Price style
        $this->start_controls_section(
            'food_price_sec_style',
            [
                'label' => __( 'Food Price', 'MMI Addons' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            // start Normal control tabs
            $this->start_controls_tabs(
                'food_style_tabs'
            );

            $this->start_controls_tab(
                'food_style_normal_tab',
                [
                    'label' => __( 'Normal', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_price_color',
                [
                    'label' => __( 'Color', 'majharul_islam' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text h1' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'food_price_typography',
                    'label' => __( 'Typography', 'majharul_islam' ),
                    'selector' => '{{WRAPPER}} .pricing_image_text h1',
                ]
            );

            $this->add_control(
                'food_price_margin',
                [
                    'label' => __( 'Margin', 'majharul_islam' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();

            // Start Hover control tab
            $this->start_controls_tab(
                'foodprice_style_hover_tab',
                [
                    'label' => __( 'Hover', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_price_hover_style',
                [
                    'label' => __( 'Color', 'majharul_islam' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text:hover h1' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->end_controls_tab();

            $this->end_controls_tabs();

        $this->end_controls_section();

        // Food card button style
        $this->start_controls_section(
            'food_btn_sec_style',
            [
                'label' => __( 'Button', 'MMI Addons' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            // start Normal control tabs
            $this->start_controls_tabs(
                'food_btn_style_tabs'
            );

            $this->start_controls_tab(
                'foodbtn_style_normal_tab',
                [
                    'label' => __( 'Normal', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_btn_color',
                [
                    'label' => __( 'Button Color', 'majharul_islam' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text a' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'food_btn_typography',
                    'label' => __( 'Typography', 'majharul_islam' ),
                    'selector' => '{{WRAPPER}} .pricing_image_text a',
                ]
            );

            $this->add_control(
                'food_btn_padding',
                [
                    'label' => __( 'Padding', 'majharul_islam' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'food_btn_border',
                    'label' => __( 'Border', 'majharul_islam' ),
                    'selector' => '{{WRAPPER}} .pricing_image_text a',
                ]
            );

            $this->add_control(
                'food_btn_border_radius',
                [
                    'label' => __( 'Border radius', 'majharul_islam' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();

            // Start Hover control tab
            $this->start_controls_tab(
                'foodbtn_style_hover_tab',
                [
                    'label' => __( 'Hover', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_btn_hover_style',
                [
                    'label' => __( 'Button Color', 'majharul_islam' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text:hover a' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'food_btn_hover_border',
                    'label' => __( 'Border', 'majharul_islam' ),
                    'selector' => '{{WRAPPER}} .pricing_image_text:hover a',
                ]
            );

            $this->add_control(
                'food_btn_hover_border_radius',
                [
                    'label' => __( 'Border radius', 'majharul_islam' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text:hover a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();

            $this->end_controls_tabs();

        $this->end_controls_section();


        // Food Price card style
        $this->start_controls_section(
            'food_price_text_sec_style',
            [
                'label' => __( 'Food Price Card', 'MMI Addons' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs(
                'food_price_card_style_tabs'
            );

            $this->start_controls_tab(
                'food_price_card_style_normal_tab',
                [
                    'label' => __( 'Normal', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_price_card_align',
                [
                    'label' => __( 'Alignment', 'majharul_islam' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => __( 'Left', 'plugin-domain' ),
                            'icon' => 'fa fa-align-left',
                        ],
                        'center' => [
                            'title' => __( 'Center', 'plugin-domain' ),
                            'icon' => 'fa fa-align-center',
                        ],
                        'right' => [
                            'title' => __( 'Right', 'plugin-domain' ),
                            'icon' => 'fa fa-align-right',
                        ],
                    ],
                    'default' => 'center',
                    'toggle' => true,
                ]
            );

            $this->add_control(
                'food_price_card_bg',
                [
                    'label' => __( 'Background Color', 'plugin-domain' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text' => 'background: {{VALUE}}',
                    ],
                ]
            );

            $this->add_control(
                'food_price_card_padding',
                [
                    'label' => __( 'Padding', 'majharul_islam' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'food_price_card_border',
                    'label' => __( 'Border', 'majharul_islam' ),
                    'selector' => '{{WRAPPER}} .pricing_image_text',
                ]
            );
            $this->end_controls_tab();

            // hover effect
            $this->start_controls_tab(
                'food_price_card_style_hover_tab',
                [
                    'label' => __( 'Hover', 'MMI Addons' ),
                ]
            );

            $this->add_control(
                'food_price_card_bg_hover',
                [
                    'label' => __( 'Background Color', 'plugin-domain' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing_image_text:hover' => 'background: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'food_price_card_border_hover',
                    'label' => __( 'Border', 'majharul_islam' ),
                    'selector' => '{{WRAPPER}} .pricing_image_text:hover',
                ]
            );
            $this->end_controls_tab();

            $this->end_controls_tabs();

        $this->end_controls_section();
    }


    // Frond-end-show
    protected function render() {
        $settings = $this->get_settings_for_display();

        $target = $settings['food_order_btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['food_order_btn_link']['nofollow'] ? ' rel="nofollow"' : '';
    ?>

        <section class="pricing_image_area">
            <div class="pricing_image"></div>
            <div class="pricing_image_text" style="text-align:<?php echo $settings['food_price_card_align'];?>">
              <h3><?php echo $settings['food_timing']; ?></h3>
              <h2><?php echo $settings['food_title']; ?></h2>
              <h1><span>From</span><?php echo $settings['food_price']; ?><span>/<?php echo $settings['pricing_time']; ?></span></h1>
              <a href="<?php echo $settings['food_order_btn_link']['url']; ?>" <?php echo $target;?> <?php echo $nofollow;?>><?php echo $settings['food_order_btn']; ?></a>
            </div>
        </section>

        <?php
    }


}
Plugin::instance()->widgets_manager->register_widget_type( new MY_Elementor_Food_Pricing() );