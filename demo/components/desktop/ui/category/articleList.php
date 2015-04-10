<?hh

class :desktop:ui:category:articleList extends :x:element {

  attribute array articles @required;
  attribute string id;
  attribute string class;

  public function render() {
    $articles  = $this->getAttribute('articles');
    $id        = $this->getAttribute('id');
    $class     = $this->getAttribute('class');

    foreach ($articles as $article) {
      $this->appendChild(
        <desktop:ui:category:article article={$article} />
      );
    }

    return
      <section id={$id} class={$class}>
        <desktop:ui:category:articleListHeader title="Latest News" moreUrl="http://example.com" />
        <div class="articles">
          {$this->getChildren()}
        </div>
        <div class="clear" />
      </section>;
  }
}
