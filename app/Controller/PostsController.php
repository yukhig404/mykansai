<?php

class PostsController extends AppController {
/* 	public $scaffold;	 *//*aaa*/
//	public $components = array('Paginator', 'RequestHandler');


    public function beforeFilter() {
//        $this->Auth->allow('index', 'view', 'area', 'genre', 'search', 'events', 'ranking', 'moresearch', 'access');

//        $this->init();
//        $this->loadModel('Post');
//        $this->Post = new post();
//        $this->Post->changeTable($this->getModeColumnString());
//        print_r($this->Post);
//
//        $tagColumnString = 'tag';
//        $titleColumnString = 'title';
//        $bodyColumnString = 'body';
//        $addressColumnString = 'address';
//        $seotitleColumnString = 'seotitle';
//        $seodescriptionColumnString = 'seodescription';
//        $seokeywordsColumnString = 'seokeywords';

//        $this->arrayColumnString = array(
//            'tag' => $tagColumnString,
//            'title' => $titleColumnString,
//            'body' => $bodyColumnString,
//            'address' => $addressColumnString,
//            'seotitle' => $seotitleColumnString,
//            'seodescription' => $seodescriptionColumnString,
//            'seokeywords' => $seokeywordsColumnString,
//        );
//
//        $this->set('arrayColumnString', $this->arrayColumnString);

//        $this->arrayInfoColumnString = array(
//            'title' => $titleColumnString,
//            'body' => $bodyColumnString,
//        );
//
//        $this->set('arrayInfoColumnString', $this->arrayInfoColumnString);


//
//        //Postから全てのタグをひっぱってきてarrayにいれて、それらを全てマージして重複を削除
//        $params = array(
//            'order' => 'created desc',
//            'fields' => array('Post.'.$this->arrayColumnString['tag']), //フィールド名の配列
//        );
//        $tagPosts = $this->Post->find('all',$params);
//        $mergedTagPosts = array();
//
//        foreach ($tagPosts as $key => $post) {
//            $str = $post['Post'][$this->arrayColumnString['tag']];
//            $tagPosts[$key]['Post']['striptagArray'] = $this->striptags($str);
//            $mergedTagPosts = array_merge($mergedTagPosts, $tagPosts[$key]['Post']['striptagArray'][2]);
//        }
//        $mergedTagPosts = array_unique($mergedTagPosts);
//
//        foreach($subGenreArray as $key2 => $val2){
//            $orderedTagArray[$key2] = array();
//            foreach ($mergedTagPosts as $key => $val){
//                if(in_array($val,$val2)){
//                    array_push($orderedTagArray[$key2], $val);
//                }
//            }
//        }
//
//        $this->set('orderedTagArray', $orderedTagArray);

    }

//	public $helpers = array('Html', 'Form');

//    public $uses = array('Post');
//    // RequestHandlerコンポーネントを使用
//    public $components = array('RequestHandler');
//
//	public function index(){
////        return '{"aaa":"hoge"}';
////        $this->set('aaa', '{"hoge":"Hogehoge"}');
//
//        $this->set(array('Posts'), $this->Post->find('all'));
//        $this->set(array(
//            '_serialize' => array('Posts'),
//            '_jsonp' => true
//        ));
//	}

    public $uses = array('Post');

    public $components = array('RequestHandler');

    public function index(){
        $piyo = array();
        $piyo[] = array(
            'a' => 'b'
        );
        $piyo[] = array(
            'a' => 'c'
        );

        $json = array(
            'hoge' => 'fuga',
            'num' => 1,
            'bool' => TRUE,
            'piyo' => $piyo,
            'john' => NULL
        );
        $this->set('posts', $json);
        $this->set('japanese', 'にほんご');
        $this->set('_serialize', array('posts', 'japanese'));

        print_r($this->request->params);

    }

}
