<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\ShoppingList;

class ShoppingList
{
    /** @var ShoppingListItemCollection */
    private $shoppingListItems;
    
    public function addItemToShoppingList(ShoppingListItem $shoppingListItem)
    {
        $this->shoppingListItems->add($shoppingListItem);
    }
    
    public function removeItemFromShoppingList(ShoppingListItem $shoppingListItem)
    {
        $this->shoppingListItems->remove($shoppingListItem);
    }
    
    public function listAllItemsInShoppingList()
    {
        return $this->shoppingListItems->listAll();
    }
}
