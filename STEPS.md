# console
curl -s https://getcomposer.org/installer | php

php composer.phar create-project symfony/framework-standard-edition /home/daryush/public_html/pai-presentation/Symfony 2.1.6

http://localhost/config.php

sudo setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs
sudo setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs

# app/config/parameters.yml //dane bazy danych
root root pai

# console
php app/console doctrine:database:create

% zmontować projekt

% struktura projektu

php app/console generate:bundle --namespace=PAI/BlogBundle --format=yml

% pokazac utworzonego bundla i AppKernel

% tworzymy klase wpisu
php app/console doctrine:generate:entity --entity="PAIBlogBundle:Post" --fields="title:string(255) content:text"
php app/console doctrine:generate:entity --entity="PAIBlogBundle:Comment" --fields="comment:text"

% tworzymy akcje kontrolera i template'y dla standardowych akcji
php app/console generate:doctrine:crud --entity="PAIBlogBundle:Post" --format="yml"
php app/console generate:doctrine:crud --entity="PAIBlogBundle:Comment" --format="yml"

# src/PAI/BlogBundle/Entity/Post

use Doctrine\Common\Collections\ArrayCollection;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="post")
     */
    protected $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }
    
# src/PAI/BlogBundle/Entity/Comment

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    protected $post;    


# console

php app/console doctrine:generate:entities PAI

php app/console doctrine:schema:update --force

# src/PAI/BlogBundle/Form
% pousuwać

#console
php app/console doctrine:generate:form PAIBlogBundle:Comment

php app/console doctrine:generate:form PAIBlogBundle:Post

#app
% dodać post
% dodać komentarz || error _toString()

# src/PAI/Entity/Post

public function __toString()
{
    return $this->getTitle();
}





