<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Skills extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Skills';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'The Skills block.';

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
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = ['skill'];

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
    // public $example = [
    //     'items' => [
    //         ['item' => 'Item one'],
    //         ['item' => 'Item two'],
    //         ['item' => 'Item three'],
    //     ],
    // ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'text' => $this->text(),
            'button' => $this->button(),
            'skills' => $this->skills(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $skills = new FieldsBuilder('skills');

        $skills
            ->addWysiwyg('text')
            ->addLink('button')
            ->addRepeater('skills')
                ->addText('skill')
                ->addText('score')
            ->endRepeater();

        return $skills->build();
    }

    /**
     * Return the text field.
     *
     * @return array
     */
    public function text()
    {
        return get_field('text');
    }

    /**
     * Return the button field.
     *
     * @return array
     */
    public function button()
    {
        return get_field('button');
    }

    /**
     * Return the skills field.
     *
     * @return array
     */
    public function skills()
    {
        return get_field('skills');
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
