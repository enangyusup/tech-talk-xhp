<?hh

class :desktop:ui:category:articleThumb extends :x:element {

  attribute Media media @required;

  public function render() {
    $media = $this->getAttribute('media');
    return
      <figure class="thumbnails">
        <img src={$media->url()} class="small" />
      </figure>;
  }
}
