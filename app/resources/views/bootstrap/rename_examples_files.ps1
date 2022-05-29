Remove-Item _web.php

Remove-Item _links.php
Add-Content _links.php "<div class='list-group w-auto'>"

function Add-Link($header, $link) {

Add-Content _links.php ('<a href="' + $link + '" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">')
Add-Content _links.php '<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">'
Add-Content _links.php '<div class="d-flex gap-2 w-100 justify-content-between">'
Add-Content _links.php ('<div><h6 class="mb-0">' + $header + '</h6></div>')
Add-Content _links.php '<p class="mb-0 opacity-75">Another examples></p>'
Add-Content _links.php '</div>'
Add-Content _links.php '<small class="opacity-50 text-nowrap">&nbsp;</small>'
Add-Content _links.php '</a>'

}

 $LINK_OLD_JS="../assets/dist/js/bootstrap.bundle.min.js"
$LINK_OLD_CSS="../assets/dist/css/bootstrap.min.css"
 
 $LINK_NEW_JS="{{ asset('js/app.js')   }}"
$LINK_NEW_CSS="{{ asset('css/app.css') }}"


Get-ChildItem . index.html -recurse                        `
| %{ $_.FullName.Split("\")[-2] }                          `
| %{ 
    (Get-Content $_\index.html)         `
    | %{ $_ -replace "$LINK_OLD_JS", "$LINK_NEW_JS" } `
    | %{ $_ -replace "$LINK_OLD_CSS", "$LINK_NEW_CSS" } `
    | Set-Content  $_".blade.php"

    Add-Content _web.php "Route::get('/bootstrap/$_', function () { return view('bootstrap/$_'); });"

    Write-Host "Add links to example $_"
    Add-Link $_ "bootstrap/$_"
}

Add-Content _links.php "</div>"
