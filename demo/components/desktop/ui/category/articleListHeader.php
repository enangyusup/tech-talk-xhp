<?hh

class :desktop:ui:category:articleListHeader extends :x:element {

  attribute string title;
  attribute string moreUrl;

  public function render() {
    $title     = $this->getAttribute('title');
    $moreUrl   = $this->getAttribute('moreUrl');

    $moreTag = <x:frag />;

    if (isset($moreUrl)) {
      $moreTag->appendChild(
        <span class="more">
          <a href={$moreUrl}>Lihat Semua</a>
        </span>
      );
    };

    return
      <header class="title">
        <h3>{$title}</h3>
        {$moreTag}
      </header>;
  }
}
