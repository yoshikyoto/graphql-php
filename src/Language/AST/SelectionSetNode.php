<?php
namespace GraphQL\Language\AST;

class SelectionSetNode extends Node
{
    public $kind = NodeType::SELECTION_SET;

    /**
     * @var SelectionNode[]
     */
    public $selections;
}
