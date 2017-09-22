
plugin.tx_ncaext_user {
  view {
    # cat=plugin.tx_ncaext_user/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:ncaext/Resources/Private/Templates/
    # cat=plugin.tx_ncaext_user/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:ncaext/Resources/Private/Partials/
    # cat=plugin.tx_ncaext_user/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:ncaext/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_ncaext_user//a; type=string; label=Default storage PID
    storagePid =
  }
}
