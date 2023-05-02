<div class="hd_sch_wr search-form">
  <fieldset id="hd_sch">
    <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php"
      onsubmit="return fsearchbox_submit(this);">
      <input type="hidden" name="sfl" value="wr_subject||wr_content">
      <input type="hidden" name="sop" value="and">
      <label for="sch_stx" class="sound_only">검색어 필수</label>
      <input class="search-input" type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
      <button type="submit" id="sch_submit" value="검색"> <i class="fas fa-search"></i><span
          class="sound_only">검색</span></button>
    </form>

    <script>
    function fsearchbox_submit(f) {
      if (f.stx.value.length < 2) {
        alert("검색어는 두글자 이상 입력하십시오.");
        f.stx.select();
        f.stx.focus();
        return false;
      }

      // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
      var cnt = 0;
      for (var i = 0; i < f.stx.value.length; i++) {
        if (f.stx.value.charAt(i) == ' ')
          cnt++;
      }

      if (cnt > 1) {
        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
        f.stx.select();
        f.stx.focus();
        return false;
      }

      return true;
    }
    </script>

  </fieldset>
</div>