<?php
require_once __DIR__ . '/../models/MenuItem.php';

class MenuController {
    public function displayMenu(): void {
        $menuModel = new MenuItem();
        $menuItems = $menuModel->getAllMenuItems();
        include __DIR__ . '/../views/menu/menuView.php';
    }
}
