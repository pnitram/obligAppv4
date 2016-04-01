/*!
 * FileInput Danish Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";
    
    $.fn.fileinputLocales['nb'] = {
        fileSingle: 'fil',
        filePlural: 'filer',
        browseLabel: 'Velg &hellip;',
        removeLabel: 'Fjern',
        removeTitle: 'Fjern valgte filer',
        cancelLabel: 'Avbryt',
        cancelTitle: 'Avbryt opplastning',
        uploadLabel: 'Last opp',
        uploadTitle: 'Last opp valgte filer',
        msgNo: 'Ingen',
        msgCancelled: 'avbrutt',
        msgZoomTitle: 'Se detaljer',
        msgZoomModalHeading: 'Detaljert visning',
        msgSizeTooLarge: 'Fil "{name}" (<b>{size} KB</b>) er st&oslash;rre enn max tillatte opplastings st&oslash;rrelse <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Du må velge minst <b>{n}</b> {files} for &aring; laste opp.',
        msgFilesTooMany: '<b>({n})</b> filer valgt, men maks. <b>{m}</b> er tillatt.',
        msgFileNotFound: 'Filen "{name}" ble ikke funnet!',
        msgFileSecured: 'Sikkerhedsrestriktioner forhindrer lesing av "{name}".',
        msgFileNotReadable: 'Filen "{name}" kan ikke leses.',
        msgFilePreviewAborted: 'F&aring;r&aring;ndsvisning avbrutt for "{name}".',
        msgFilePreviewError: 'Det er oppst&aring;tt en feil under lesing av filen "{name}".',
        msgInvalidFileType: 'Ukjent filtype "{name}". Kun "{types}" kan brukes.',
        msgInvalidFileExtension: 'Ukjent filtype "{name}". Kun "{extensions}" filer kan brukes.',
        msgUploadAborted: 'Filopplasting annulert',
        msgValidationError: 'Valideringsfeil',
        msgLoading: 'Henter fil {index} av {files} &hellip;',
        msgProgress: 'Henter fil {index} av {files} - {name} - {percent}% fullf&oslash;rt.',
        msgSelected: '{n} {files} valgt',
        msgFoldersNotAllowed: 'Drag & drop kun filer! {n} mappe(r) hoppet over.',
        msgImageWidthSmall: 'Bredden av bilde "{name}" skal v&aelig;re p&aring; minst {size} px.',
        msgImageHeightSmall: 'H&oslash;yden av bildet "{name}" skal v&aelig;re p&aring; minst {size} px.',
        msgImageWidthLarge: 'Bredden av bildet "{name}" m&aring; ikke v&aelig;re over {size} px.',
        msgImageHeightLarge: 'H&oslash;yden av bildet "{name}" m&aring; ikke v&aelig;re over {size} px.',
        msgImageResizeError: 'Kunne ikke f&aring; billedets dimensjoner for at endre st&oslash;rrelsen.',
        msgImageResizeException: 'Feil ved endring av størrelsen på bildet.<pre>{errors}</pre>',
        dropZoneTitle: 'Drag & drop filer her &hellip;',
        fileActionSettings: {
            removeTitle: 'Fjern fil',
            uploadTitle: 'Last opp fil',
            indicatorNewTitle: 'Ikke lastet opp enn&aring;',
            indicatorSuccessTitle: 'Lastet opp',
            indicatorErrorTitle: 'Opplastning feilet',
            indicatorLoadingTitle: 'Last opp ...'
        }
    };
})(window.jQuery);