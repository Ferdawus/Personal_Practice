<?php 
    // $names = ['Laravel','Symfony','Lumen'];
    
    // foreach ($names as $key => $name) {
    //     echo "$name \n";
    // }
    
    
    $posts = [
            [
                'post_id' => 1,
                'title'   => "Introduction On PHP",
                'content' => "In this post ,we will cover the basics PHP",
                'comments' =>[
                    ['comment_id'=> 2, 'user'=>"Ferdawus", 'message' => 'Great Post']
                ]
            ]
        ];
    echo "Comments\n";
    foreach ($posts as $key => $post) {
        echo "Post Title: {$post['title']}\n";
        echo "Post Content: {$post['content']}\n";
        
        foreach ($post['comments'] as $key => $comment) {
            echo "User: {$comment['user']}\n";
            echo "Messages: {$comment['message']}\n";
        }
        
    }
?>