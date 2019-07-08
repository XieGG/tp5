<?php
    namespace admin\index\controller;

    class Index
    {
        public function index()
        {
            return dump(config());
        }
    }