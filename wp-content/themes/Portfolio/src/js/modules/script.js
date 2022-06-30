import { VERSION, REVISION } from "../consts/version";

$(function () {
  //Version set start
  $("#version-number").html(`v${VERSION} (${REVISION})`);
  //Version set end
});
