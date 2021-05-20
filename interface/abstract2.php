<?php
ini_set("display_errors", 1);
abstract class AbstractPageTemplate{
    protected final function template(){
        $result = $this->header();
        $result .= $this->article();
        $result .= $this->footer();
        return $result;
    }

    protected abstract function header();
    protected abstract function article();
    protected abstract function footer();

    public function render(){
        return $this->template();
    }
}

class TextPage extends AbstractPageTemplate{
    protected function header(){
        return "PHP\n";
    }
    protected function article(){
        return "PHP: Hypertext Preprocessor\n";
    }
    protected function footer(){
        return "website is php.net\n";
    }
}

class HtmlPage extends AbstractPageTemplate{
    protected function header(){
        return "<header>PHP</header>\n";
    }
    protected function article(){
        return "<article>PHP: Hypertext Preprocessor</article>\n";
    }
    protected function footer(){
        return "<footer>website is php.net</footer>\n";
    }
}

$textPage = new TextPage();
$htmlPage = new HtmlPage();

echo "<h1>Text</h1>";
echo $textPage->render();

echo "<h1>Html</h1>";
echo $htmlPage->render();
?>