<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        *, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

/*
! tailwindcss v3.4.13 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
  -webkit-tap-highlight-color: transparent;
  /* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-feature-settings: normal;
  /* 2 */
  font-variation-settings: normal;
  /* 3 */
  font-size: 1em;
  /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  letter-spacing: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
input:where([type='button']),
input:where([type='reset']),
input:where([type='submit']) {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden] {
  display: none;
}

.container {
  width: 100%;
}

@media (min-width: 640px) {
  .container {
    max-width: 640px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 768px;
  }
}

@media (min-width: 1024px) {
  .container {
    max-width: 1024px;
  }
}

@media (min-width: 1280px) {
  .container {
    max-width: 1280px;
  }
}

@media (min-width: 1536px) {
  .container {
    max-width: 1536px;
  }
}

.fixed {
  position: fixed;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.inset-0 {
  inset: 0px;
}

.bottom-0 {
  bottom: 0px;
}

.left-0 {
  left: 0px;
}

.right-0 {
  right: 0px;
}

.top-0 {
  top: 0px;
}

.z-30 {
  z-index: 30;
}

.z-\[99\] {
  z-index: 99;
}

.clear-start {
  clear: inline-start;
}

.m-0 {
  margin: 0px;
}

.-mx-3 {
  margin-left: -0.75rem;
  margin-right: -0.75rem;
}

.mx-3 {
  margin-left: 0.75rem;
  margin-right: 0.75rem;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.my-10 {
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}

.my-4 {
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.my-5 {
  margin-top: 1.25rem;
  margin-bottom: 1.25rem;
}

.my-7 {
  margin-top: 1.75rem;
  margin-bottom: 1.75rem;
}

.-mt-1 {
  margin-top: -0.25rem;
}

.-mt-12 {
  margin-top: -3rem;
}

.mb-0 {
  margin-bottom: 0px;
}

.mb-10 {
  margin-bottom: 2.5rem;
}

.mb-12 {
  margin-bottom: 3rem;
}

.mb-3 {
  margin-bottom: 0.75rem;
}

.mb-32 {
  margin-bottom: 8rem;
}

.mb-6 {
  margin-bottom: 1.5rem;
}

.mb-7 {
  margin-bottom: 1.75rem;
}

.mb-80 {
  margin-bottom: 20rem;
}

.ml-8 {
  margin-left: 2rem;
}

.mr-2 {
  margin-right: 0.5rem;
}

.mr-3 {
  margin-right: 0.75rem;
}

.mt-1 {
  margin-top: 0.25rem;
}

.mt-10 {
  margin-top: 2.5rem;
}

.mt-12 {
  margin-top: 3rem;
}

.mt-16 {
  margin-top: 4rem;
}

.mt-2 {
  margin-top: 0.5rem;
}

.mt-20 {
  margin-top: 5rem;
}

.mt-24 {
  margin-top: 6rem;
}

.mt-3 {
  margin-top: 0.75rem;
}

.mt-32 {
  margin-top: 8rem;
}

.mt-4 {
  margin-top: 1rem;
}

.mt-48 {
  margin-top: 12rem;
}

.mt-5 {
  margin-top: 1.25rem;
}

.mt-7 {
  margin-top: 1.75rem;
}

.mt-8 {
  margin-top: 2rem;
}

.mb-5 {
  margin-bottom: 1.25rem;
}

.mt-6 {
  margin-top: 1.5rem;
}

.mb-24 {
  margin-bottom: 6rem;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.flex {
  display: flex;
}

.inline-flex {
  display: inline-flex;
}

.grid {
  display: grid;
}

.hidden {
  display: none;
}

.size-6 {
  width: 1.5rem;
  height: 1.5rem;
}

.h-10 {
  height: 2.5rem;
}

.h-12 {
  height: 3rem;
}

.h-24 {
  height: 6rem;
}

.h-32 {
  height: 8rem;
}

.h-4 {
  height: 1rem;
}

.h-64 {
  height: 16rem;
}

.h-8 {
  height: 2rem;
}

.h-full {
  height: 100%;
}

.h-screen {
  height: 100vh;
}

.w-1\/2 {
  width: 50%;
}

.w-12 {
  width: 3rem;
}

.w-4 {
  width: 1rem;
}

.w-8 {
  width: 2rem;
}

.w-96 {
  width: 24rem;
}

.w-full {
  width: 100%;
}

.w-screen {
  width: 100vw;
}

.w-2\/3 {
  width: 66.666667%;
}

.max-w-3xl {
  max-width: 48rem;
}

.max-w-4xl {
  max-width: 56rem;
}

.max-w-5xl {
  max-width: 64rem;
}

.max-w-6xl {
  max-width: 72rem;
}

.max-w-md {
  max-width: 28rem;
}

.max-w-sm {
  max-width: 24rem;
}

.rotate-12 {
  --tw-rotate: 12deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rotate-180 {
  --tw-rotate: 180deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.cursor-pointer {
  cursor: pointer;
}

.select-none {
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}

.columns-1 {
  -moz-columns: 1;
       columns: 1;
}

.break-inside-avoid {
  -moz-column-break-inside: avoid;
       break-inside: avoid;
}

.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.flex-col {
  flex-direction: column;
}

.flex-wrap {
  flex-wrap: wrap;
}

.items-center {
  align-items: center;
}

.justify-center {
  justify-content: center;
}

.justify-between {
  justify-content: space-between;
}

.justify-around {
  justify-content: space-around;
}

.gap-3 {
  gap: 0.75rem;
}

.gap-4 {
  gap: 1rem;
}

.gap-6 {
  gap: 1.5rem;
}

.gap-2 {
  gap: 0.5rem;
}

.space-x-1 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(0.25rem * var(--tw-space-x-reverse));
  margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-1 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
}

.space-y-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}

.space-y-6 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
}

.divide-y > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-y-reverse: 0;
  border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
  border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
}

.divide-neutral-800 > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-opacity: 1;
  border-color: rgb(38 38 38 / var(--tw-divide-opacity));
}

.self-end {
  align-self: flex-end;
}

.overflow-hidden {
  overflow: hidden;
}

.text-ellipsis {
  text-overflow: ellipsis;
}

.whitespace-nowrap {
  white-space: nowrap;
}

.rounded {
  border-radius: 0.25rem;
}

.rounded-2xl {
  border-radius: 1rem;
}

.rounded-full {
  border-radius: 9999px;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.rounded-md {
  border-radius: 0.375rem;
}

.rounded-xl {
  border-radius: 0.75rem;
}

.rounded-b-xl {
  border-bottom-right-radius: 0.75rem;
  border-bottom-left-radius: 0.75rem;
}

.rounded-t-xl {
  border-top-left-radius: 0.75rem;
  border-top-right-radius: 0.75rem;
}

.border {
  border-width: 1px;
}

.border-black {
  --tw-border-opacity: 1;
  border-color: rgb(0 0 0 / var(--tw-border-opacity));
}

.border-blue-300 {
  --tw-border-opacity: 1;
  border-color: rgb(147 197 253 / var(--tw-border-opacity));
}

.border-gray-200 {
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
}

.border-green-300 {
  --tw-border-opacity: 1;
  border-color: rgb(134 239 172 / var(--tw-border-opacity));
}

.border-green-400 {
  --tw-border-opacity: 1;
  border-color: rgb(74 222 128 / var(--tw-border-opacity));
}

.border-neutral-200 {
  --tw-border-opacity: 1;
  border-color: rgb(229 229 229 / var(--tw-border-opacity));
}

.border-neutral-300 {
  --tw-border-opacity: 1;
  border-color: rgb(212 212 212 / var(--tw-border-opacity));
}

.border-orange-300 {
  --tw-border-opacity: 1;
  border-color: rgb(253 186 116 / var(--tw-border-opacity));
}

.border-violet-200 {
  --tw-border-opacity: 1;
  border-color: rgb(221 214 254 / var(--tw-border-opacity));
}

.border-violet-300 {
  --tw-border-opacity: 1;
  border-color: rgb(196 181 253 / var(--tw-border-opacity));
}

.border-neutral-700 {
  --tw-border-opacity: 1;
  border-color: rgb(64 64 64 / var(--tw-border-opacity));
}

.bg-blue-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(239 246 255 / var(--tw-bg-opacity));
}

.bg-green-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(220 252 231 / var(--tw-bg-opacity));
}

.bg-green-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(240 253 244 / var(--tw-bg-opacity));
}

.bg-green-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(34 197 94 / var(--tw-bg-opacity));
}

.bg-green-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(22 163 74 / var(--tw-bg-opacity));
}

.bg-neutral-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(250 250 250 / var(--tw-bg-opacity));
}

.bg-neutral-800 {
  --tw-bg-opacity: 1;
  background-color: rgb(38 38 38 / var(--tw-bg-opacity));
}

.bg-neutral-950 {
  --tw-bg-opacity: 1;
  background-color: rgb(10 10 10 / var(--tw-bg-opacity));
}

.bg-orange-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(255 237 213 / var(--tw-bg-opacity));
}

.bg-orange-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(255 247 237 / var(--tw-bg-opacity));
}

.bg-violet-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(237 233 254 / var(--tw-bg-opacity));
}

.bg-violet-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(245 243 255 / var(--tw-bg-opacity));
}

.bg-violet-700 {
  --tw-bg-opacity: 1;
  background-color: rgb(109 40 217 / var(--tw-bg-opacity));
}

.bg-violet-900 {
  --tw-bg-opacity: 1;
  background-color: rgb(76 29 149 / var(--tw-bg-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-yellow-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(250 204 21 / var(--tw-bg-opacity));
}

.bg-neutral-700 {
  --tw-bg-opacity: 1;
  background-color: rgb(64 64 64 / var(--tw-bg-opacity));
}

.bg-gradient-to-r {
  background-image: linear-gradient(to right, var(--tw-gradient-stops));
}

.from-green-600 {
  --tw-gradient-from: #16a34a var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(22 163 74 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-violet-50 {
  --tw-gradient-from: #f5f3ff var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(245 243 255 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-violet-700 {
  --tw-gradient-from: #6d28d9 var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(109 40 217 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.to-green-500 {
  --tw-gradient-to: #22c55e var(--tw-gradient-to-position);
}

.to-pink-600 {
  --tw-gradient-to: #db2777 var(--tw-gradient-to-position);
}

.to-violet-100 {
  --tw-gradient-to: #ede9fe var(--tw-gradient-to-position);
}

.bg-clip-text {
  -webkit-background-clip: text;
          background-clip: text;
}

.object-cover {
  -o-object-fit: cover;
     object-fit: cover;
}

.p-3 {
  padding: 0.75rem;
}

.p-4 {
  padding: 1rem;
}

.p-5 {
  padding: 1.25rem;
}

.p-6 {
  padding: 1.5rem;
}

.px-1 {
  padding-left: 0.25rem;
  padding-right: 0.25rem;
}

.px-12 {
  padding-left: 3rem;
  padding-right: 3rem;
}

.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.px-8 {
  padding-left: 2rem;
  padding-right: 2rem;
}

.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-2\.5 {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.py-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.py-48 {
  padding-top: 12rem;
  padding-bottom: 12rem;
}

.py-32 {
  padding-top: 8rem;
  padding-bottom: 8rem;
}

.py-24 {
  padding-top: 6rem;
  padding-bottom: 6rem;
}

.pl-5 {
  padding-left: 1.25rem;
}

.pt-0 {
  padding-top: 0px;
}

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-4xl {
  font-size: 2.25rem;
  line-height: 2.5rem;
}

.text-5xl {
  font-size: 3rem;
  line-height: 1;
}

.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.text-xs {
  font-size: 0.75rem;
  line-height: 1rem;
}

.text-base {
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-6xl {
  font-size: 3.75rem;
  line-height: 1;
}

.font-black {
  font-weight: 900;
}

.font-bold {
  font-weight: 700;
}

.font-medium {
  font-weight: 500;
}

.font-semibold {
  font-weight: 600;
}

.uppercase {
  text-transform: uppercase;
}

.leading-none {
  line-height: 1;
}

.tracking-tight {
  letter-spacing: -0.025em;
}

.tracking-wide {
  letter-spacing: 0.025em;
}

.text-blue-900 {
  --tw-text-opacity: 1;
  color: rgb(30 58 138 / var(--tw-text-opacity));
}

.text-green-800 {
  --tw-text-opacity: 1;
  color: rgb(22 101 52 / var(--tw-text-opacity));
}

.text-green-900 {
  --tw-text-opacity: 1;
  color: rgb(20 83 45 / var(--tw-text-opacity));
}

.text-neutral-50 {
  --tw-text-opacity: 1;
  color: rgb(250 250 250 / var(--tw-text-opacity));
}

.text-neutral-500 {
  --tw-text-opacity: 1;
  color: rgb(115 115 115 / var(--tw-text-opacity));
}

.text-neutral-600 {
  --tw-text-opacity: 1;
  color: rgb(82 82 82 / var(--tw-text-opacity));
}

.text-neutral-800 {
  --tw-text-opacity: 1;
  color: rgb(38 38 38 / var(--tw-text-opacity));
}

.text-orange-800 {
  --tw-text-opacity: 1;
  color: rgb(154 52 18 / var(--tw-text-opacity));
}

.text-orange-900 {
  --tw-text-opacity: 1;
  color: rgb(124 45 18 / var(--tw-text-opacity));
}

.text-red-600 {
  --tw-text-opacity: 1;
  color: rgb(220 38 38 / var(--tw-text-opacity));
}

.text-transparent {
  color: transparent;
}

.text-violet-600 {
  --tw-text-opacity: 1;
  color: rgb(124 58 237 / var(--tw-text-opacity));
}

.text-violet-800 {
  --tw-text-opacity: 1;
  color: rgb(91 33 182 / var(--tw-text-opacity));
}

.text-violet-900 {
  --tw-text-opacity: 1;
  color: rgb(76 29 149 / var(--tw-text-opacity));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-neutral-700 {
  --tw-text-opacity: 1;
  color: rgb(64 64 64 / var(--tw-text-opacity));
}

.text-neutral-200 {
  --tw-text-opacity: 1;
  color: rgb(229 229 229 / var(--tw-text-opacity));
}

.underline {
  text-decoration-line: underline;
}

.underline-offset-4 {
  text-underline-offset: 4px;
}

.opacity-0 {
  opacity: 0;
}

.opacity-100 {
  opacity: 1;
}

.opacity-20 {
  opacity: 0.2;
}

.opacity-70 {
  opacity: 0.7;
}

.opacity-60 {
  opacity: 0.6;
}

.shadow-\[6px_6px_0_-2px_\#000\] {
  --tw-shadow: 6px 6px 0 -2px #000;
  --tw-shadow-colored: 6px 6px 0 -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-neutral-500 {
  --tw-shadow-color: #737373;
  --tw-shadow: var(--tw-shadow-colored);
}

.outline-4 {
  outline-width: 4px;
}

.ring-2 {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.ring-4 {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.ring {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.ring-blue-100 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(219 234 254 / var(--tw-ring-opacity));
}

.ring-green-100 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(220 252 231 / var(--tw-ring-opacity));
}

.ring-green-400 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(74 222 128 / var(--tw-ring-opacity));
}

.ring-neutral-200 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(229 229 229 / var(--tw-ring-opacity));
}

.ring-neutral-800 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(38 38 38 / var(--tw-ring-opacity));
}

.ring-orange-100 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(255 237 213 / var(--tw-ring-opacity));
}

.ring-violet-100 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(237 233 254 / var(--tw-ring-opacity));
}

.ring-white {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
}

.ring-neutral-700 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(64 64 64 / var(--tw-ring-opacity));
}

.grayscale {
  --tw-grayscale: grayscale(100%);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.filter {
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.transition {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-colors {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.duration-100 {
  transition-duration: 100ms;
}

.duration-200 {
  transition-duration: 200ms;
}

.duration-300 {
  transition-duration: 300ms;
}

.duration-700 {
  transition-duration: 700ms;
}

.ease-in {
  transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
}

.ease-out {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
}

.bgg1{
  background: linear-gradient(142deg, rgb(239, 157, 26) 0%, rgb(232, 119, 48) 100%);
}

.placeholder\:text-neutral-400::-moz-placeholder {
  --tw-text-opacity: 1;
  color: rgb(163 163 163 / var(--tw-text-opacity));
}

.placeholder\:text-neutral-400::placeholder {
  --tw-text-opacity: 1;
  color: rgb(163 163 163 / var(--tw-text-opacity));
}

.hover\:-rotate-2:hover {
  --tw-rotate: -2deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.hover\:rotate-2:hover {
  --tw-rotate: 2deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.hover\:bg-neutral-100:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(245 245 245 / var(--tw-bg-opacity));
}

.hover\:bg-neutral-900:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(23 23 23 / var(--tw-bg-opacity));
}

.hover\:underline:hover {
  text-decoration-line: underline;
}

.focus\:border-neutral-300:focus {
  --tw-border-opacity: 1;
  border-color: rgb(212 212 212 / var(--tw-border-opacity));
}

.focus\:border-violet-500:focus {
  --tw-border-opacity: 1;
  border-color: rgb(139 92 246 / var(--tw-border-opacity));
}

.focus\:bg-white:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus\:ring-2:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-neutral-200\/60:focus {
  --tw-ring-color: rgb(229 229 229 / 0.6);
}

.focus\:ring-neutral-400:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(163 163 163 / var(--tw-ring-opacity));
}

.focus\:ring-neutral-900:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(23 23 23 / var(--tw-ring-opacity));
}

.focus\:ring-offset-2:focus {
  --tw-ring-offset-width: 2px;
}

.active\:bg-white:active {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.disabled\:pointer-events-none:disabled {
  pointer-events: none;
}

.disabled\:cursor-not-allowed:disabled {
  cursor: not-allowed;
}

.disabled\:opacity-50:disabled {
  opacity: 0.5;
}

.group:hover .group-hover\:underline {
  text-decoration-line: underline;
}

.peer:disabled ~ .peer-disabled\:cursor-not-allowed {
  cursor: not-allowed;
}

.peer:disabled ~ .peer-disabled\:opacity-70 {
  opacity: 0.7;
}

@media (min-width: 640px) {
  .sm\:mx-0 {
    margin-left: 0px;
    margin-right: 0px;
  }

  .sm\:-mt-2 {
    margin-top: -0.5rem;
  }

  .sm\:block {
    display: block;
  }

  .sm\:flex {
    display: flex;
  }

  .sm\:hidden {
    display: none;
  }

  .sm\:w-0 {
    width: 0px;
  }

  .sm\:w-auto {
    width: auto;
  }

  .sm\:columns-2 {
    -moz-columns: 2;
         columns: 2;
  }

  .sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .sm\:flex-row {
    flex-direction: row;
  }

  .sm\:justify-start {
    justify-content: flex-start;
  }

  .sm\:gap-4 {
    gap: 1rem;
  }

  .sm\:rounded-xl {
    border-radius: 0.75rem;
  }

  .sm\:rounded-full {
    border-radius: 9999px;
  }

  .sm\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .sm\:px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .sm\:text-left {
    text-align: left;
  }

  .sm\:text-center {
    text-align: center;
  }

  .sm\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .sm\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .sm\:text-7xl {
    font-size: 4.5rem;
    line-height: 1;
  }

  .sm\:text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .sm\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .sm\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }
}

@media (min-width: 768px) {
  .md\:flex {
    display: flex;
  }

  .md\:w-8\/12 {
    width: 66.666667%;
  }

  .md\:flex-row {
    flex-direction: row;
  }

  .md\:p-0 {
    padding: 0px;
  }
}

@media (min-width: 1024px) {
  .lg\:mb-0 {
    margin-bottom: 0px;
  }

  .lg\:h-screen {
    height: 100vh;
  }

  .lg\:w-\[\] {
    width: ;
  }

  .lg\:w-\[1024px\] {
    width: 1024px;
  }

  .lg\:columns-3 {
    -moz-columns: 3;
         columns: 3;
  }

  .lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .lg\:text-9xl {
    font-size: 8rem;
    line-height: 1;
  }

  .lg\:text-8xl {
    font-size: 6rem;
    line-height: 1;
  }

  .lg\:text-7xl {
    font-size: 4.5rem;
    line-height: 1;
  }
}

@media (min-width: 1536px) {
  .\32xl\:my-10 {
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
  }

  .\32xl\:max-w-7xl {
    max-width: 80rem;
  }

  .\32xl\:text-7xl {
    font-size: 4.5rem;
    line-height: 1;
  }

  .\32xl\:text-8xl {
    font-size: 6rem;
    line-height: 1;
  }
}
        
    </style>
    <style>[x-cloak]{display:none}</style>
</head>
<body class="bg-neutral-950 select-none">
   
    <!-- hero section -->
    <section class="h-screen flex items-center justify-center text-center md:p-0 p-5">
        <div class="max-w-3xl l-16 text-center">
            <h1 class="text-white 2xl:text-8xl sm:text-5xl text-4xl font-black">Frontend <span class="key-highlight text-whit bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent">Domination <img class="absolute bottom-0 left-0" src="../green-highlight.sv" alt=""> </span></h1>
            <p class="text-neutral-600 sm:px-5 text-xl sm:text-2xl mt-4 text-center">Learn exactly what matters to become a highly skilled frontend developer & build production grade web apps!</p>
            <!-- <h1 class="text-white text-4xl fot-bold">Create anything with code</h1> -->
            <!-- stats -->
             <div class="flex flex-col md:flex-row justify-center gap-4 mt-10">
                <div class="inline-block  bg-neutral-800 py-2 px-4 sm:text-2xl text-xl font-medium text-neutral-200 rounded-lg ring-4 ring-neutral-800">From 16th November</div>
                <div class="inline-block  bg-neutral-800 py-2 px-4 sm:text-2xl text-xl font-medium text-neutral-200 rounded-lg ring-4 ring-neutral-800">8 Weeks Cohort</div>
                <div class="inline-block  bg-neutral-800 py-2 px-4 sm:text-2xl text-xl font-medium text-neutral-200 rounded-lg ring-4 ring-neutral-800">Only Rs 3999/-</div>
            
             </div>
             <img src="../fr-placed.svg" alt="" class="inline-block w-96 mt-10 text-center">
             <!-- <a href="" class="inline-block py-2 w-full bg-green-600">Join now & Dominate Frontend</a> -->
        </div>
    </section>

    <!-- second section -->
     <section class="h-screen 2xl:max-w-7xl max-w-5xl mx-auto  flex items-center">
        <div class="mb-32 l-16 text-center p-5">
            <h1 class="text-white sm:block hidden font-black  2xl:text-8xl sm:text-5xl text-4xl">We believe in,<br><span class="key-highlight text-whit bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent">Consistency. </span>No shortcuts.</h1>
            <h1 class="text-white block sm:hidden font-black  2xl:text-8xl sm:text-5xl text-4xl">We believe in, <span class="key-highlight text-whit bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent">Consistency. </span>No shortcuts.</h1>
            <div class="flex justify-center flex-wrap mt-12 sm:gap-4 gap-2">
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">HTML & CSS</div>
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">Javascript</div>
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">React js</div> 
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">Tailwind CSS</div>
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">Building Projects 🤟</div>
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">Placement Assistance 💰</div>
            </div>
        </div>
     </section>

     <section class="max-w-5xl mx-auto  ">
        <div class="mb-32 l-16 text-center">
            <h1 class="text-white font-black 2xl:text-7xl sm:text-5xl text-4xl">Dominate!<br><span class="key-highlight text-neutral-800 bg-clip-tex outline-4 text-transparen fill-transparen">From start to victory. </span></h1>
            </div>
        <div x-data="{ 
            activeAccordion: '', 
            setActiveAccordion(id) { 
                this.activeAccordion = (this.activeAccordion == id) ? '' : id 
            } 
        }" class="relative w-full mx-auto overflow-hidden  sm:text-4xl text-2xl font-bold text-neutral-50 bg-whit borde border-gray-200 divide-y divide-neutral-800 rounded-md">
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlin group-hover:decoration-green-00">
                <span>1. HTML</span>
                <svg class="w-4 h-4 duration-700 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-collapse.duration.700ms x-cloak>
                <div class="p-4 pt-0 opacity-60 pl-5">
                    <ul class="ml-8 text-xl sm:text-3xl my-5" style="list-style-type: none;">
                        <li class="my-4">Intro to HTML</li>
                        <li class="my-4">HTML Forms and Tables</li>
                    </ul>
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                <span>2. CSS</span>
                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-collapse.duration.700ms x-cloak>
                <div class="p-4 pt-0 opacity- opacity-60 pl-5">
                    <ul class="ml-8 text-xl sm:text-3xl  my-5 " style="list-style-type: none;">
                        <li class="my-4">Intro to CSS</li>
                        <li class="my-4">CSS Positions</li>
                        <li class="my-4">CSS Flexbox</li>
                        <li class="my-4">Netflix Clone</li>
                        <li class="my-4">Pseudo elements and classes</li>
                        <li class="my-4">Responsive Design</li>
                        <li class="my-4">CSS Animations</li>
                        <li class="my-4">Netflix clone & Deploying to Vercel</li>
                        <li class="my-4">Grid System & Combinators</li>
                        <li class="my-4">Dribbble Landing page</li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlie">
                <span>3. Tailwind CSS</span>
                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-0 opacity-60">
                    <ul class="ml-8 text-xl sm:text-3xl my-5 " style="list-style-type: none;">
                        <li class="my-4">Setup & Intro to Tailwind</li>
                        <li class="my-4">Tailwind Responsive Design</li>
                        <li class="my-4">ChatGPT clone</li>
                        <li class="my-4">Resources and Todo App</li>
                    </ul>
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlie">
                <span>4. Javascript</span>
                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-0 opacity-60">
                    <ul class="ml-8 text-xl sm:text-3xl my-5 " style="list-style-type: none;">
                        <li class="my-4">JavaScript Foundations</li>
                        <li class="my-4">JavaScript Basics</li>
                        <li class="my-4">Functions & Loops</li>
                        <li class="my-4">Array mapping & filters</li>
                        <li class="my-4">Intro to DOM</li>
                        <li class="my-4">Creating Elements</li>
                        <li class="my-4">User management system</li>
                        <li class="my-4">Event Listeners</li>
                        <li class="my-4">Local storage & Session Storage</li>
                        <li class="my-4">Asynchronous JS & API's</li>
                        <li class="my-4">Todo App</li>
                        <li class="my-4">Javascript ES6</li>
                        <li class="my-4">Book My show clone</li>


                    </ul>
                </div>
            </div>
        </div>

        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlie">
                <span>4. React Js</span>
                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-0 opacity-60">
                    <ul class="ml-8 text-xl sm:text-3xl my-5 " style="list-style-type: none;">
                        <li class="my-4">JavaScript Refresher</li>
                        <li class="my-4">Intro to React & Components</li>
                        <li class="my-4">Props & Conditional rendering</li>
                        <li class="my-4">UseState Hook</li>
                        <li class="my-4">React Router Dom</li>
                        <li class="my-4">Instagram Clone</li>
                        <li class="my-4">Netflix Clone - Adding functionality</li>
                        <li class="my-4">UseEffect & API</li>
                        <li class="my-4">React Forms</li>
                        <li class="my-4">Intro to Firebase</li>
                        <li class="my-4">ChatGPT API & Shadcn</li>
                        <li class="my-4">Major Project React Portfolio</li>
                        <li class="my-4">Meeting App</li>
                        <li class="my-4">React Authentication</li>
                        <li class="my-4">React Context Api</li>
                        <li class="my-4">Image generation App using DALLE 3.o</li>




                    </ul>
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlin group-hover:decoration-green-00">
                <span>5. Redux Toolkit</span>
                <svg class="w-4 h-4 duration-700 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-collapse.duration.700ms x-cloak>
                <div class="p-4 pt-0 opacity- pl-5">
                    <ul class="ml-8 text-xl sm:text-3xl my-5" style="list-style-type: none;">
                        <li class="my-4">Redux - Deep dive</li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlin group-hover:decoration-green-00">
                <span>6. Git & GitHub</span>
                <svg class="w-4 h-4 duration-700 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-collapse.duration.700ms x-cloak>
                <div class="p-4 pt-0 opacity-60 pl-5">
                    <ul class="ml-8 text-xl sm:text-3xl my-5" style="list-style-type: none;">
                        <li class="my-4">Intro to Git</li>
                        <li class="my-4">Git Branching (branch management, merge conflicts)</li>
                        <li class="my-4">Pull Requests (creating, reviewing, best practices)</li>
                        <li class="my-4">Reverting and Resetting Changes</li>
                        <li class="my-4">Collaborating on GitHub (collaborator roles, issues, discussions)</li>



                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="ml- mt-20 mb-80 text-cente">
        <h1 class="text-white text-5xl font-bold">Industry level intense training.</h1>
        <p class="text-neutral-600 text-3xl mt-4 ">If anything is considered part of frontend dev, we’re covering it in this course.</p>
    </div> -->
     </section>
<!-- 
     <section class="flex h-screen items-center justify-center">
        <div class="lg:w-[1024px]">
            <div class="w-2/3 borde bgg bg-neutral-800 rounded-xl p-5 text-white ">
                <h1 class="text-3xl font-bold">Join Frontend Cohort Now</h1>
                <p class="mt-8">Offer ends in </p>
                
            </div>
        </div>
     </section> -->

     <section class="lg:h-screen flex items-center">
        <div class="max-w-5xl mx-auto p-5 mt-48 mb-24 text-cente">
            <h1 class="hidden sm:block text-white lg:text-8xl sm:text-7xl text-4xl font-bold">More Value,<br> Less cost.</h1>
            <h1 class="sm:hidden text-white lg:text-9xl sm:text-7xl text-4xl text-center  font-bold">More Value, Less cost.</h1>

            <p class="text-neutral-600 text-xl sm:text-2xl mt-4 text-center sm:text-left">If anything is considered part of frontend dev, we’re covering it in this course! With <span class="key-highlight text-whit bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent">Diwali's special </span> unbeatable Price.</p>
            <!-- <p class="text-xs text-neutral-600 mt-3 text-center sm:text-left">*Course validity is for 1 year from date of batch start.</p> -->
            <div class="flex gap-4 my-5 items-center justify-center sm:justify-start text-whit text-2xl text-neutral-600 ">
                <p id="hours" class="ring- ring-neutral-700  py-1 rounded-full">8 hrs</p>
                <p>:</p>
                <p id="minutes" class="ring- ring-neutral-700 py-1 rounded-full">10 min</p>
                <p>:</p>
                <p id="seconds" class="ring- ring-neutral-700  py-1 rounded-full">46 sec</p>
              </div>
              
              <script>
                // Initial time values
                let hours = 8;
                let minutes = 10;
                let seconds = 46;
              
                // Update the timer every second
                const timer = setInterval(() => {
                  if (seconds === 0) {
                    if (minutes === 0) {
                      if (hours === 0) {
                        clearInterval(timer); // Stop the timer when it reaches 0
                        return;
                      } else {
                        hours--;
                        minutes = 59;
                        seconds = 59;
                      }
                    } else {
                      minutes--;
                      seconds = 59;
                    }
                  } else {
                    seconds--;
                  }
              
                  // Update HTML elements
                  document.getElementById('hours').textContent = `${hours} hrs`;
                  document.getElementById('minutes').textContent = `${minutes} min`;
                  document.getElementById('seconds').textContent = `${seconds} sec`;
                }, 1000);
              </script>
              
            <a href="" class="inline-block text-white bg-gradient-to-r from-green-600 to-green-500 bg-clip-tex mt-3 mb-12 sm:px-12 w-full sm:w-auto text-center py-4 sm:rounded-xl rounded-full sm:text-3xl text-xl font-bold shado shado-xl shadow-neutral-500">Join frontend cohort now at 3999/-</a>
        </div>
     </section>
     
</body>
</html>