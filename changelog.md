Changelog
==============================================================
## Version 2.3.0 - 13th August 2023
Update textmedia content element output

### All changes
```
[13.08.2023][feat] Add new backend field vertical alignment
[13.08.2023][feat] Update textmedia template
[13.08.2023][style] Add textmedia positioning
```

## Version 2.2.0 - 12th August 2023
Add backend preview for banner and fix some small issues

### All changes
```
[12.08.2023][fix] Set correct nav link - Fixes #8
[12.08.2023][feat] Add backend preview for banner - Resolves #6
[12.08.2023][fix] Set correct rte css path
[12.08.2023][chore] Update version number
```

## Version 2.1.0 - 10th August 2023
There were some changes made to the navigation templates to allow for 
mobile compatibility out of the box, as well as some other minor styling 
changes.

### All changes
```
[10.08.2023][feat] Adjust nav templates for mobile - Resolves #5
[10.08.2023][style] Move anchor further up
[10.08.2023][chore] Add additional one-page identifier
[10.08.2023][chore] Update version number
```

## Version 2.0.2 - 6th August 2023
In this version the extension has been granted an icon.

### All changes
```
[06.08.2023][chore] Add new extension icon
[06.08.2023][chore] Update version number
```

## Version 2.0.1 - 6th August 2023
This version contains some minor bug fixes. See below for a full list
of all changes.

### All changes
```
[05.08.2023][fix] Set correct type for onepage constant
[06.08.2023][feat] Add smooth scrolling
[06.08.2023][chore] Remove custom layouts
[06.08.2023][chore] Update version number
```

## Version 2.0.0 - 5th August 2023
### Updatability
In version 2.0.0 a lot of code was moved over to [EXT:af6passenger](https://github.com/alexanderfreundlieb/af6passenger), 
to allow for better updatability of this extension. The main thought was, 
that all individual changes for different websites, will be made in the extension
`af6passenger`, whereas nothing will be changed in this extension. Because of 
that, the extension can be updated for all future websites, without having to 
do it manually for each and every website.

### All changes
```
[05.08.2023][feat] Make constants available for the constant editor
[05.08.2023][chore] Add new root paths & move data processing to EXT:af6passenger
[05.08.2023][chore] Move meta tags to EXT:af6passenger
[05.08.2023][chore] Move custom JavaScript to EXT:af6passenger
[05.08.2023][chore] Move certain pagets configurations to EXT:af6passenger
[05.08.2023][chore] Move main RTE config to EXT:af6passenger
[05.08.2023][chore] Move certain CSS to EXT:af6passenger
[05.08.2023][chore] Update version number
```
