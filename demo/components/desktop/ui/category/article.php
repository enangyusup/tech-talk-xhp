<?hh

class :desktop:ui:category:article extends :x:element {

  attribute Article article @required;

  public function render() {
    $article = $this->getAttribute('article');
    $media = new Media;

    return
      <article id={$article->id()}>
        <desktop:ui:category:articleThumb media={$media} />
        <aside>
          <header>
            <h2>{$article->title()}</h2>
          </header>
          <div class="summary">{$article->short_desc()}</div>
        </aside>
      </article>;
  }
}
