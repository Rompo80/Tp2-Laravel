## Tp1 Laravel - CRUD 


 **Le lien pour accéder à votre site sur webdev:**
*https://e2295542.webdev.cmaisonneuve.qc.ca/laravelDev/*


**Le lien pour GitHub:**
*https://github.com/Rompo80/Laravel-students-forum*


1. En utilisant les lignes de commande, créer un nouveau projet Laravel nommée Maisonneuve{votre matricule}

```
    composer create-project laravel/laravel Maisonneuve2295542
```


2. En utilisant les lignes de commande, créer les modèles (model: **Etudiant**)
3. En utilisant les lignes de commande, créer les tables  (migration table: **etudiants**)
6. En utilisant les lignes de commande, créer les contrôleurs (controller: **EtudiantController** )

```
    php artisan make:model Etudiant -mrc
```




2. En utilisant les lignes de commande, créer les modèles (model: **Ville**)
3. En utilisant les lignes de commande, créer les tables  (migration table: **villes**)

```
    php artisan make:model Ville -m
```




4. En utilisant les lignes de commande, saisir 15 nouvelles villes
5. En utilisant les lignes de commande, saisir 100 nouveaux étudient

- 1 Au debut j'ai crée EtudiantFactory.php et VilleFactory.php pour mettre les paramettres des fake données

```
    php artisan make:factory EtudiantFactory --model=Etudiant
    php artisan make:factory VilleFactory --model=Ville
```

- 2 Ensuite, j'ai modifié  database/seeders/DatabaseSeeder.php  

```
  public function run()
    {
        Ville::factory()->count(15)->create();

        Etudiant::factory()->count(100)->create([
            'ville_id' => function () {
                return Ville::all()->random()->id;
            },
        ]);    
    }
```
 
 

- 3 Finalement j'ai utilisé la commande pour migrer les tables aves les fake données dans la base de données (sans oublier de mettre le nom de la BD et les params nécessaires dans le .env)


```
    php artisan db:seed 
```



```

 //select * from blog_posts;
                //JSON
                //$blog = forumPost::all();


                //$blog = forumPost::select('title')
                //        ->get();

                /*insert into blog_posts (title, body) values (?, ?);
        prepare
        execute
        RETURN select * from blog_posts where id = last_id
        $blog = forumPost::create([
            'title' => 'Title 1',
            'body'  => 'Message 1'
        ]);
        */
                /*select * from blog_posts where id = ?
        prepare
        execute
        uni array
        */
                // $blog = forumPost::find(3);

                /*
        update blog_posts set title = ?, body = ? where id = 3
         prepare
        execute
        uni array
         */
                /*  $blog->update([
            'title' => 'Title 1',
            'body'  => 'Message 1'
        ]);*/

                //UPDATE V2
                /*$blog->title = 'Title 1'; //fillAll(request)
        $blog->save();
        */

                /*delete from blog_posts where id = 3/?
        prepare
        execute
        T/F */
                //$blog->delete();

                /*$user = User::select()
                ->where('email', 'cremin.asa@example.com')
                ->get();
        return $user[0];
        */

                //$blog = forumPost::where('user_id', '>', 8)->get();

                /*$blog = forumPost::select('title', 'user_id')
                ->where('user_id', '>', 8)
                ->get();
        */

                /*$blog = forumPost::select('title', 'user_id')
                ->where('id', 8)
                ->get();
        */

                /* AND
        SELECT * FROM blog_posts where user_id = ? AND title = ?
        
        $blog = forumPost::select()
                ->where('user_id', 1)
                ->where('title', '=', 'Abc')
                ->get();
        */

                /* OR
        SELECT * FROM blog_posts where user_id = ? OR title = ?
        $blog = forumPost::select()
                ->where('user_id', 2)
                ->orwhere('title', '=', 'Abc')
                ->get();        
        */

                /*ORDER BY 
        $blog = forumPost::select()
                ->orderBy('title', 'desc')
                ->get();
        */

                /*LIMIT 
        $blog = forumPost::select()
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();
        */
                /*JOIN 
            SELECT * FROM blog_posts
            INNER JOIN users ON blog_posts.user_id = users.id
        
        $blog = forumPost::select()
                ->join("users", "users.id", "user_id")
                ->get();
        */
                /*OUTER JOIN 
            SELECT * FROM blog_posts RIGHT OUTER JOIN users ON blog_posts.user_id = users.id
        
        $blog = forumPost::select()
                ->rightJoin("users", "users.id", "user_id")
                ->get();
        */

                /* Aggregation Function
         */
                //$blog = forumPost::max('id');
                //$blog = forumPost::count();

                /*$blog = forumPost::select('title', 'user_id')
                ->where('user_id', '>', 8)
                ->count();*/

                /*GROUP BY 
        SELECT count(id), user_id
        FROM blog_posts
        GROUP BY user_id;
        */

        ```





        







