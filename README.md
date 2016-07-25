Cakephp-ArticleIncViews
====================

A method (called articleIncViews) to increment the number of views (field views in database of a articles table).

It's used by example for added a visit counter on a article.

NB:
- The "views" field can be changed if you have another namespace in your database.
- It can be used on any table with integer field named "views".

Compatibility
---

Cakephp 2.8

Version
----

0.1

Installation
--------------

Copy the method articleIncViews into app/Model/AppModel.php 

Call this method in our controller (ArticlesController.php by example) :

    // increment views
    $this->BlogArticle->articleIncViews($article['BlogArticle']['id']);


Author
-------------
Nicolas HENRY

[My Blog (french)](http://www.nicolas-henry.fr)




