<?php
/* Generated by neoan3-cli */

namespace Neoan3\Frame;

use Neoan3\Apps\Ops;
use Neoan3\Core\Serve;


class Docs extends Serve
{

    function output($params = [])
    {
        $this->addHead('title',preg_replace('/[A-Z]/',' $0',ucfirst(current_endpoint)));
        $this->main = Ops::embraceFromFile('frame/docs/skeleton.html',[
            'content'=>$this->main,
            'menu' => Ops::embraceFromFile('component/menu/menu.view.html',['base'=>base]),
            'base' => base
        ]);
        $this->main = preg_replace('/\n[\s]*/','',$this->main);
        parent::output($params);
    }

    function constants()
    {
        return [
            'base' => [base],
            'link' => [
                [
                    'sizes' => '32x32',
                    'type' => 'image/png',
                    'rel' => 'icon',
                    'href' => 'asset/neoan-favicon.png'
                ]
            ],
            'js' => [
                ['src' => path .'/frame/docs/main.js', 'data' => ['base' => base]]
            ],
            'meta'       => [
                ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']
            ],
            'stylesheet' => [
                '' . base . 'frame/docs/index.css',
            ]
        ];
    }
}
