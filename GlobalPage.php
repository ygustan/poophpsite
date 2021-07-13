<?php
namespace Cours\Revisions;

class GlobalPage {

    protected $classe = "GlobalPage";
    
    public function head()
    {
        return "
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
                integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
        </head>
        ";
    }

    public function header()
    {
        return "
        <header>
            <nav>
                <a href='index.php'>Accueil</a>
            </nav>
        </header>
        ";
    }

    /**
     * Undocumented function
     *
     * @param string ...$contents
     * @return void
     */
    public function main(...$contents)
    {
        $page="";
        foreach ($contents as $content) {
           $page .= "<div>$content </div>";
        }
        return "
        <main>
            $page
        </main>
        ";
    }

    public function footer()
    {
        return "
            <footer>
            <p> Merci de visiter notre site </p>
            </footer>
        ";
    }

    public function aside()
    {

    }
}