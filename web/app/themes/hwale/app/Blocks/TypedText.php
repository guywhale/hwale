<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class TypedText extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Typed Text';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Large text that is typed out on page load with an optional button.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'theme';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'text';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = ['typed', 'text'];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = ['page'];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'auto';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    // public $styles = [
    //     [
    //         'name' => 'light',
    //         'label' => 'Light',
    //         'isDefault' => true,
    //     ],
    //     [
    //         'name' => 'dark',
    //         'label' => 'Dark',
    //     ]
    // ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'textLine1' => 'Lorem Ipsum',
        'textLine2' => 'Vivamus magna justo',
        // 'button' => ['Vivamus magna justo'],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'textLine1' => $this->textLine1(),
            'textLine2' => $this->textLine2(),
            'button' => $this->button(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $typedText = new FieldsBuilder('typed_text');

        $typedText
            ->addText('text_line_1')
            ->addText('text_line_2')
            ->addLink('button');

        return $typedText->build();
    }

    /**
     * Return the textLine1 field.
     *
     * @return array
     */
    public function textLine1()
    {
        return get_field('text_line_1') ?: $this->example['textLine1'];
    }

    /**
     * Return the textLine2 field.
     *
     * @return array
     */
    public function textLine2()
    {
        return get_field('text_line_2') ?: $this->example['textLine2'];
    }

    /**
     * Return the button field.
     *
     * @return array
     */
    public function button()
    {
        // return get_field('button') ?: $this->example['button'];
        return get_field('button');
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
