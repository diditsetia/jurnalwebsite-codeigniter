<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Menulis</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/small-business.css') ?>" rel="stylesheet">

   <!--font-Awesome-->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/css/font-awesome.min.css');?>">
<!---font-Awesome-->

<!-- editor-->
<script src="<?php echo base_url();?>assets/asset_tulis/tinymcerun/js/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url();?>assets/asset_tulis/tinymcerun/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url();?>assets/asset_tulis/tinymcerun/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/asset_tulis/tinymcerun/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/asset_tulis/tinymcerun/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/asset_tulis/tinymcerun/js/tinymce/plugins/codesample/plugin.dev.js"></script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorjudul",
        height: 50,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],
    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],

    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorabstrak",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],
    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],

    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorpendahuluan",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorkajianpustaka",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorlandasanteori",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditormetodepenelitian",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorpembahasan",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorpenutup",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditordaftarpustaka",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>










    <style type="text/css">
        .navbar-inverse {
            background-color: #ffffff;
             box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19);
             border-color: #ffffff;






        }

        .navbar-inverse .navbar-nav>li>a:hover {
        color: #000; 
        }

        hr {
            margin-top: 5px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #dcdcdc;
        }

      

      footer{
  background-color: #56bca6;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  width: 100%;
  text-align: left;
  font: normal 16px sans-serif;

  padding: 45px 50px;
}

footer .footer-limiter {
  max-width: 880px;
  margin: 0 auto;
}

footer .footer-left p{
  color:  #000000;
  font-size: 14px;
  margin: 0;
}

/* Footer links */

footer p.footer-links{
  font-size:18px;
  font-weight: bold;
  color:  #000000;
  margin: 0 0 10px;
  padding: 0;
}

footer p.footer-links a{
  display:inline-block;
  line-height: 1.8;
  text-decoration: none;
  color:  inherit;
}

footer .footer-right{
  float: right;
  margin-top: 6px;
  max-width: 180px;
}

footer .footer-right a{
  display: inline-block;
  width: 35px;
  height: 35px;
  background-color:  #000000;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-left: 3px;
}


body {
     
    background-color: #f8f8f8;
}

.hero-spacer {
    margin-top: 50px;
}

.hero-feature {
    margin-bottom: 30px;
}

footer {
    margin: 50px 0;
}



       
    </style>


</head>

<body>
  

    <!--navbar-->
    
  <?php 
  /*
   * Variabel $headernya diambil dari libraries template.php
   * (application/libraries/template.php)
   * */
  echo $navbar; ?>
    


    <!-- Page Content -->
    
    <?php 

    echo $konten;
    ?>
            
    
        

    <br>
    <br>
    <br>
    
    

     <!--footer-->
     

     




    

   

    
  <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>


</body>

</html>
