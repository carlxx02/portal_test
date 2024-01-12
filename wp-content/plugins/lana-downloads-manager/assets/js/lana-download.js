tinymce.PluginManager.add('lana_download', function (editor) {

    editor.addButton('lana_download', {
        tooltip: 'Download Shortcode',
        icon: 'lana-download',
        cmd: 'lanaDownloadShortcodeCmd'
    });

    editor.addCommand('lanaDownloadShortcodeCmd', function () {

        jQuery.post(ajaxurl, {
            action: 'lana_downloads_manager_get_lana_download_list',
            _ajax_nonce: lana_downloads_manager_ajax['get_lana_download_list_nonce']
        }, function (response) {

            /** error */
            if (false === response['success']) {
                alert(response['data']['message']);
            }

            /** success */
            if (true === response['success']) {
                var lanaDownloadList = response['data']['lana_download_list'],
                    lanaDownloadValues = [{
                        'text': 'Select File...',
                        'value': '',
                        'disabled': true,
                        'selected': true,
                        'hidden': true
                    }];

                /** desc order by id */
                var lanaDownloadListIds = Object.keys(lanaDownloadList).sort(function (a, b) {
                    return b - a;
                });

                /** add list to values */
                jQuery.each(lanaDownloadListIds, function (i, id) {
                    lanaDownloadValues.push({
                        'text': '#' + id + ' - ' + lanaDownloadList[id],
                        'value': id
                    });
                });

                editor.windowManager.open({
                    title: 'Download',
                    body: [
                        {
                            type: 'listbox',
                            name: 'file',
                            label: 'File',
                            values: lanaDownloadValues,
                            minWidth: 350
                        },
                        {
                            type: 'textbox',
                            name: 'text',
                            label: 'Text',
                            minWidth: 350
                        }
                    ],
                    onsubmit: function (e) {
                        editor.focus();

                        var file = e.data.file;
                        var text = e.data.text;

                        if (null === file) {
                            return false;
                        }

                        var id_attr = '';
                        var text_attr = '';

                        if (file) {
                            id_attr = ' id="' + file + '"';
                        }

                        if (text) {
                            text_attr = ' text="' + text + '"';
                        }

                        editor.execCommand('mceInsertContent', false, '[lana_download' + id_attr + text_attr + ']');
                    }
                });
            }
        });
    });
});