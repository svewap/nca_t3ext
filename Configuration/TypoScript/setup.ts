
plugin.tx_ncaext_user {
  view {
    templateRootPaths.0 = EXT:ncaext/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_ncaext_user.view.templateRootPath
    partialRootPaths.0 = EXT:ncaext/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_ncaext_user.view.partialRootPath
    layoutRootPaths.0 = EXT:ncaext/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_ncaext_user.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_ncaext_user.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

