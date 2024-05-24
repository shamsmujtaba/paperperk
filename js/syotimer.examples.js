jQuery(function ($) {
  /* Simple Timer. The countdown to 20:30 2035.05.09 */
 

  /* Periodic Timer. Period is equal 10 days */
  $("#periodic-timer_period_days").syotimer({
    date: new Date(2025, 00, 00, 15),
    layout: "dhms",
    periodic: true,
    periodInterval: 12,
    periodUnit: "h",
  });



  /**
   * Periodic Timer.
   * Change options: doubleNumbers, effect type, language
   */
  var EFFECT_TYPES = ["opacity", "none"];
  var LANGUAGES = ["eng", "rus", "heb"];
  var changeOptionsTimer = $("#periodic-timer_change-options");
  var changeOptionsEffectType = $("#change_options__effect-type");
  var changeOptionsDoubleNumbers = $("#change_options__double-numbers");
  var changeOptionsLang = $("#change_options__lang");

  changeOptionsTimer.syotimer({
    periodic: true,
    periodInterval: 10,
    periodUnit: "d",
    headTitle:
      "<div>Effect type: " +
      '<span class="option option_type_effect-type">none</span>' +
      "</div>" +
      "<div>Use double numbers: " +
      '<span class="option option_type_double-numbers">true</span>' +
      "</div>" +
      "<div>Language: " +
      '<span class="option option_type_language">eng</span>' +
      "</div>",
  });

  /**
   * Getting a next of current index of array by circle
   * @param array
   * @param currentIndex
   * @returns {*}
   */
  function getNextIndex(array, currentIndex) {
    return currentIndex === array.length - 1 ? 0 : currentIndex + 1;
  }

  /**
   * Update values in header title of timer `#periodic-timer_change-options`
   */
  function updateOptionTitles() {
    var effectIndex = parseInt(changeOptionsEffectType.data("index"));
    var doubleNumberIndex = parseInt(changeOptionsDoubleNumbers.data("index"));
    var languageIndex = parseInt(changeOptionsLang.data("index"));
    var blocks = changeOptionsTimer.data("syotimer-blocks");
    blocks.headBlock
      .find(".option_type_effect-type")
      .html(EFFECT_TYPES[effectIndex]);
    blocks.headBlock
      .find(".option_type_double-numbers")
      .html(doubleNumberIndex ? "true" : "false");
    blocks.headBlock
      .find(".option_type_language")
      .html(LANGUAGES[languageIndex]);
  }

  changeOptionsEffectType.on("click", function () {
    var button = $(this);
    var effectIndex = parseInt(button.data("index"));
    var nextEffectIndex = getNextIndex(EFFECT_TYPES, effectIndex);
    button.data("index", nextEffectIndex);
    changeOptionsTimer.syotimer(
      "setOption",
      "effectType",
      EFFECT_TYPES[nextEffectIndex]
    );
    updateOptionTitles();
  });
  changeOptionsDoubleNumbers.on("click", function () {
    var button = $(this);
    var index = parseInt(button.data("index"));
    var useDoubleNumbers = Math.abs(index - 1);
    button.data("index", useDoubleNumbers);
    changeOptionsTimer.syotimer(
      "setOption",
      "doubleNumbers",
      useDoubleNumbers === 1
    );
    updateOptionTitles();
  });
  changeOptionsLang.on("click", function () {
    var button = $(this);
    var langIndex = parseInt(button.data("index"));
    var nextLangIndex = getNextIndex(LANGUAGES, langIndex);
    button.data("index", nextLangIndex);
    changeOptionsTimer.syotimer("setOption", "lang", LANGUAGES[nextLangIndex]);
    updateOptionTitles();
  });

  /**
   * Localization in timer.
   * Add new language
   */

  // Adding of a words for signatures of countdown
  $.syotimerLang.neng = {
    second: ["secondone", "secondfive", "seconds"],
    minute: ["minuteone", "minutefive", "minutes"],
    hour: ["hourone", "hourfive", "hours"],
    day: ["dayone", "dayfive", "days"],
    // Adding of the handler that selects an index from the list of words
    // based on ahead the going number
    handler: function nengNumeral(number, words) {
      var lastDigit = number % 10;
      var index = 2;
      if (lastDigit === 1) {
        index = 0;
      } else if (lastDigit === 5) {
        index = 1;
      }
      return words[index];
    },
  };

  $("#periodic-timer_localization_new-english").syotimer({
    lang: "neng",
    layout: "ms",

    periodic: true,
    periodInterval: 6,
    periodUnit: "m",
  });
});
