# E-Kebele UI - Component Library & Design System

## Document Information
- **Project**: E-Kebele Administrative System
- **Purpose**: Reusable UI components and design system specifications
- **Date**: October 2025
- **Version**: 1.0

---

## Table of Contents
1. [Design Tokens](#design-tokens)
2. [Typography System](#typography-system)
3. [Button Components](#button-components)
4. [Form Components](#form-components)
5. [Card Components](#card-components)
6. [Table Components](#table-components)
7. [Navigation Components](#navigation-components)
8. [Feedback Components](#feedback-components)
9. [Icon System](#icon-system)
10. [Layout Grid](#layout-grid)

---

## Design Tokens

### Color Tokens

#### Primary Palette
```css
--color-primary-main: #1976D2;
--color-primary-dark: #0D47A1;
--color-primary-light: #BBDEFB;
--color-primary-contrast: #FFFFFF;
```

#### Semantic Colors
```css
--color-success: #4CAF50;
--color-success-light: #81C784;
--color-success-dark: #388E3C;

--color-warning: #FF9800;
--color-warning-light: #FFB74D;
--color-warning-dark: #F57C00;

--color-error: #F44336;
--color-error-light: #E57373;
--color-error-dark: #D32F2F;

--color-info: #2196F3;
--color-info-light: #64B5F6;
--color-info-dark: #1976D2;
```

#### Neutral Colors
```css
--color-gray-50: #FAFAFA;
--color-gray-100: #F5F5F5;
--color-gray-200: #EEEEEE;
--color-gray-300: #E0E0E0;
--color-gray-400: #BDBDBD;
--color-gray-500: #9E9E9E;
--color-gray-600: #757575;
--color-gray-700: #616161;
--color-gray-800: #424242;
--color-gray-900: #212121;
```

#### Text Colors
```css
--text-primary: #212121;
--text-secondary: #757575;
--text-disabled: #9E9E9E;
--text-hint: #BDBDBD;
```

### Spacing Tokens
```css
--space-xs: 4px;
--space-sm: 8px;
--space-md: 16px;
--space-lg: 24px;
--space-xl: 32px;
--space-2xl: 48px;
--space-3xl: 64px;
```

### Border Radius
```css
--radius-sm: 2px;
--radius-md: 4px;
--radius-lg: 8px;
--radius-xl: 12px;
--radius-2xl: 16px;
--radius-round: 50%;
--radius-pill: 9999px;
```

### Shadows
```css
--shadow-xs: 0 1px 2px rgba(0,0,0,0.05);
--shadow-sm: 0 2px 4px rgba(0,0,0,0.08);
--shadow-md: 0 4px 8px rgba(0,0,0,0.12);
--shadow-lg: 0 8px 16px rgba(0,0,0,0.16);
--shadow-xl: 0 12px 24px rgba(0,0,0,0.20);
```

### Transitions
```css
--transition-fast: 150ms ease-in-out;
--transition-base: 250ms ease-in-out;
--transition-slow: 350ms ease-in-out;
```

### Z-Index Scale
```css
--z-dropdown: 1000;
--z-sticky: 1020;
--z-fixed: 1030;
--z-modal-backdrop: 1040;
--z-modal: 1050;
--z-popover: 1060;
--z-tooltip: 1070;
```

---

## Typography System

### Font Families
```css
--font-family-primary: 'Roboto', -apple-system, BlinkMacSystemFont, 
                       'Segoe UI', sans-serif;
--font-family-mono: 'Roboto Mono', 'Courier New', monospace;
```

### Font Sizes
```css
--font-size-xs: 12px;
--font-size-sm: 14px;
--font-size-base: 16px;
--font-size-lg: 18px;
--font-size-xl: 20px;
--font-size-2xl: 24px;
--font-size-3xl: 30px;
--font-size-4xl: 36px;
```

### Font Weights
```css
--font-weight-light: 300;
--font-weight-regular: 400;
--font-weight-medium: 500;
--font-weight-semibold: 600;
--font-weight-bold: 700;
```

### Line Heights
```css
--line-height-tight: 1.25;
--line-height-normal: 1.5;
--line-height-relaxed: 1.75;
--line-height-loose: 2;
```

### Typography Scale

#### H1 - Page Title
```
Font Size: 36px (--font-size-4xl)
Font Weight: 500 (--font-weight-medium)
Line Height: 1.25 (--line-height-tight)
Color: --text-primary
Margin Bottom: 24px (--space-lg)

Example: "Residents Management"
```

#### H2 - Section Title
```
Font Size: 24px (--font-size-2xl)
Font Weight: 500 (--font-weight-medium)
Line Height: 1.25
Color: --text-primary
Margin Bottom: 16px (--space-md)

Example: "Personal Information"
```

#### H3 - Subsection Title
```
Font Size: 20px (--font-size-xl)
Font Weight: 500
Line Height: 1.5
Color: --text-primary
Margin Bottom: 12px

Example: "Emergency Contact"
```

#### Body Text
```
Font Size: 16px (--font-size-base)
Font Weight: 400 (--font-weight-regular)
Line Height: 1.5 (--line-height-normal)
Color: --text-primary

Example: Form labels, paragraph text
```

#### Small Text
```
Font Size: 14px (--font-size-sm)
Font Weight: 400
Line Height: 1.5
Color: --text-secondary

Example: Helper text, captions
```

#### Extra Small Text
```
Font Size: 12px (--font-size-xs)
Font Weight: 400
Line Height: 1.5
Color: --text-secondary

Example: Timestamps, labels
```

---

## Button Components

### Primary Button
```
Visual:
┌─────────────────────┐
│   Save Changes      │
└─────────────────────┘

Specifications:
- Background: --color-primary-main
- Text Color: white
- Font Size: 14px (--font-size-sm)
- Font Weight: 500 (--font-weight-medium)
- Padding: 10px 24px
- Border Radius: 4px (--radius-md)
- Box Shadow: --shadow-sm
- Transition: --transition-base

States:
- Hover: Background darken 10%
- Active: Background darken 20%, scale(0.98)
- Focus: 2px solid outline --color-primary-light
- Disabled: Opacity 0.5, cursor not-allowed
- Loading: Show spinner, text changes to "Loading..."
```

### Secondary Button
```
Visual:
┌─────────────────────┐
│      Cancel         │
└─────────────────────┘

Specifications:
- Background: transparent
- Text Color: --color-primary-main
- Border: 1px solid --color-primary-main
- Font Size: 14px
- Font Weight: 500
- Padding: 10px 24px
- Border Radius: 4px

States:
- Hover: Background --color-primary-light
- Active: Background darken slightly
- Focus: 2px solid outline
- Disabled: Opacity 0.5
```

### Danger Button
```
Visual:
┌─────────────────────┐
│      Delete         │
└─────────────────────┘

Specifications:
- Background: --color-error
- Text Color: white
- Font Size: 14px
- Font Weight: 500
- Padding: 10px 24px
- Border Radius: 4px
- Box Shadow: --shadow-sm

States: Similar to Primary but with error colors
```

### Success Button
```
Visual:
┌─────────────────────┐
│      Approve        │
└─────────────────────┘

Specifications:
- Background: --color-success
- Text Color: white
- Other specs same as Primary Button
```

### Icon Button
```
Visual:
┌───┐
│ ⚙️ │
└───┘

Specifications:
- Size: 40x40px (square)
- Border Radius: 4px or 50% (round)
- Padding: 8px
- Icon Size: 24x24px
- Background: transparent
- Hover: Background --color-gray-100
```

### Button Sizes

#### Large Button
```
Padding: 12px 32px
Font Size: 16px
Height: 48px
```

#### Medium Button (Default)
```
Padding: 10px 24px
Font Size: 14px
Height: 40px
```

#### Small Button
```
Padding: 8px 16px
Font Size: 12px
Height: 32px
```

---

## Form Components

### Text Input

#### Standard Input
```
Visual:
┌─────────────────────────────────┐
│ First Name                      │
│ [Ahmed________________]         │
│  ✓ Looks good!                  │
└─────────────────────────────────┘

Specifications:
- Label:
  - Font Size: 14px
  - Font Weight: 500
  - Color: --text-primary
  - Margin Bottom: 8px
  
- Input Field:
  - Height: 40px
  - Padding: 10px 12px
  - Border: 1px solid --color-gray-300
  - Border Radius: 4px
  - Font Size: 14px
  - Background: white
  
- States:
  - Focus: Border --color-primary-main, shadow
  - Error: Border --color-error
  - Success: Border --color-success
  - Disabled: Background --color-gray-100, cursor not-allowed
  
- Helper Text:
  - Font Size: 12px
  - Color: --text-secondary (normal)
  - Color: --color-error (error state)
  - Color: --color-success (success state)
```

#### Input with Icon
```
Visual:
┌─────────────────────────────────┐
│ Email Address                   │
│ [📧 user@example.com________]   │
└─────────────────────────────────┘

Icon positioned:
- Left: Padding-left increased to 40px
- Right: Padding-right increased to 40px
```

### Textarea
```
Visual:
┌─────────────────────────────────┐
│ Notes                           │
│ ┌─────────────────────────────┐ │
│ │                             │ │
│ │                             │ │
│ │                             │ │
│ └─────────────────────────────┘ │
│  0/500 characters               │
└─────────────────────────────────┘

Specifications:
- Min Height: 80px
- Max Height: 200px (with scroll)
- Resize: Vertical only
- Character Counter (optional)
- Same styles as Text Input
```

### Select Dropdown
```
Visual:
┌─────────────────────────────────┐
│ Gender                          │
│ [Select...              ▼]     │
└─────────────────────────────────┘

Expanded:
┌─────────────────────────────────┐
│ [Male                    ✓]    │
│ [Female                   ]    │
│ [Other                    ]    │
│ [Prefer not to say        ]    │
└─────────────────────────────────┘

Specifications:
- Same base styles as Text Input
- Dropdown Icon: Right side, 12x12px
- Dropdown Menu:
  - Background: white
  - Border: 1px solid --color-gray-300
  - Border Radius: 4px
  - Box Shadow: --shadow-lg
  - Max Height: 300px (with scroll)
  - Z-Index: --z-dropdown

- Option:
  - Padding: 10px 12px
  - Hover: Background --color-gray-100
  - Selected: Background --color-primary-light, checkmark icon
```

### Checkbox
```
Visual:
☐ Unchecked    [  ] Remember me
☑ Checked      [✓] I agree to terms

Specifications:
- Size: 20x20px
- Border: 2px solid --color-gray-400
- Border Radius: 3px
- Background: white (unchecked)
- Background: --color-primary-main (checked)
- Checkmark: White, 14x14px

- Label:
  - Padding Left: 8px
  - Font Size: 14px
  - Color: --text-primary
  - Cursor: pointer

- States:
  - Hover: Border --color-primary-main
  - Focus: Outline --color-primary-light
  - Disabled: Opacity 0.5
```

### Radio Button
```
Visual:
○ Unselected   ( ) Male
◉ Selected     (•) Female

Specifications:
- Size: 20x20px
- Border: 2px solid --color-gray-400
- Border Radius: 50% (circle)
- Inner Circle: 10x10px when selected
- Background: --color-primary-main (selected)

- Same label and state styles as Checkbox
```

### Toggle Switch
```
Visual:
OFF: ⚪──────  │⚪      │
ON:  ──────⚪  │      ⚪│

Specifications:
- Width: 48px
- Height: 24px
- Border Radius: 12px (pill shape)
- Background: --color-gray-300 (OFF)
- Background: --color-primary-main (ON)
- Circle: 20x20px, white
- Transition: --transition-base
- Slide animation on toggle
```

### Date Picker
```
Visual:
┌─────────────────────────────────┐
│ Date of Birth                   │
│ [MM/DD/YYYY          📅]        │
└─────────────────────────────────┘

Opens calendar popup:
┌─────────────────────────┐
│ ‹ October 2025 ›       │
├───┬───┬───┬───┬───┬───┬─┤
│ S │ M │ T │ W │ T │ F │S│
├───┼───┼───┼───┼───┼───┼─┤
│   │   │ 1 │ 2 │ 3 │ 4 │5│
│ 6 │ 7 │ 8 │ 9 │10 │11 │12│
│13 │14 │15 │16 │17 │18 │19│
│20 │21 │22 │23 │24 │25 │26│
│27 │28 │29 │30 │31 │   │ │
└───┴───┴───┴───┴───┴───┴─┘

Specifications:
- Input field: Same as Text Input
- Calendar Icon: Right side, 20x20px
- Calendar Popup:
  - Background: white
  - Border: 1px solid --color-gray-300
  - Border Radius: 8px
  - Box Shadow: --shadow-xl
  - Padding: 16px
  - Z-Index: --z-popover

- Calendar Navigation:
  - Month/Year: Font Size 16px, bold
  - Arrows: 24x24px icon buttons

- Calendar Days:
  - Size: 32x32px each
  - Border Radius: 50%
  - Today: Border --color-primary-main
  - Selected: Background --color-primary-main, white text
  - Hover: Background --color-gray-100
  - Other Month: Color --text-disabled
```

### File Upload
```
Visual:
┌─────────────────────────────────┐
│ Profile Photo                   │
│ ┌─────────────────────────────┐ │
│ │                             │ │
│ │      📷 Click to upload     │ │
│ │    or drag and drop here    │ │
│ │                             │ │
│ │  PNG, JPG up to 5MB         │ │
│ └─────────────────────────────┘ │
└─────────────────────────────────┘

With File:
┌─────────────────────────────────┐
│ 📄 profile.jpg (2.3 MB)   [×]  │
│ ▓▓▓▓▓▓▓▓▓▓▓▓░░░░  75%          │
└─────────────────────────────────┘

Specifications:
- Drop Zone:
  - Min Height: 120px
  - Border: 2px dashed --color-gray-300
  - Border Radius: 8px
  - Background: --color-gray-50
  - Text Align: Center
  - Cursor: pointer

- Drag Over State:
  - Border Color: --color-primary-main
  - Background: --color-primary-light

- File Info:
  - Icon: 24x24px
  - Filename: 14px, truncate if too long
  - File Size: 12px, --text-secondary
  - Remove Button: Icon button, red on hover

- Progress Bar:
  - Height: 4px
  - Background: --color-gray-200
  - Fill: --color-primary-main
  - Border Radius: 2px
```

---

## Card Components

### Basic Card
```
Visual:
┌───────────────────────────────┐
│                               │
│  Card Title                   │
│  ─────────────────────────    │
│                               │
│  Card content goes here...    │
│                               │
│  [Action]  [Action]           │
│                               │
└───────────────────────────────┘

Specifications:
- Background: white
- Border: 1px solid --color-gray-200 (optional)
- Border Radius: 8px (--radius-lg)
- Box Shadow: --shadow-sm
- Padding: 24px (--space-lg)

- Title:
  - Font Size: 20px
  - Font Weight: 500
  - Margin Bottom: 16px

- Content:
  - Font Size: 14px
  - Line Height: 1.5

- Actions:
  - Margin Top: 16px
  - Buttons aligned right or left
```

### Stat Card
```
Visual:
┌───────────────────────────────┐
│  📊                           │
│                               │
│  1,234                        │
│  Total Residents              │
│                               │
│  +5% ↑  vs last month         │
└───────────────────────────────┘

Specifications:
- Same base as Basic Card
- Icon:
  - Size: 48x48px
  - Color: --color-primary-main
  - Margin Bottom: 16px

- Value:
  - Font Size: 36px (--font-size-4xl)
  - Font Weight: 700
  - Color: --text-primary

- Label:
  - Font Size: 14px
  - Color: --text-secondary
  - Margin Bottom: 8px

- Trend:
  - Font Size: 12px
  - Color: --color-success (positive) or --color-error (negative)
  - Icon: Arrow up/down
```

### Profile Card
```
Visual:
┌───────────────────────────────┐
│     ┌──────────┐              │
│     │          │              │
│     │  Photo   │              │
│     │          │              │
│     └──────────┘              │
│                               │
│     Ahmed Hassan              │
│     KEB/001/2024              │
│     ● Active                  │
│                               │
│  [View Profile]  [Edit]       │
└───────────────────────────────┘

Specifications:
- Text Align: Center
- Photo:
  - Size: 100x100px
  - Border Radius: 50% (circle)
  - Border: 4px solid white
  - Box Shadow: --shadow-md
  - Margin: 0 auto 16px

- Name:
  - Font Size: 20px
  - Font Weight: 500
  - Margin Bottom: 4px

- ID:
  - Font Size: 14px
  - Color: --text-secondary
  - Margin Bottom: 8px

- Status:
  - Font Size: 12px
  - Status indicator (colored dot)
```

---

## Table Components

### Data Table
```
Visual:
┌────────────────────────────────────────────────────┐
│ [🔍 Search...]        [Filter ▼]  [Export ▼]      │
├────────────────────────────────────────────────────┤
│ [✓] Name        │ ID Number   │ Age │ Actions    │
├─────────────────┼─────────────┼─────┼────────────┤
│ [ ] Ahmed       │ KEB/001/24  │ 32  │ [•••]     │
│ [ ] Fatima      │ KEB/002/24  │ 28  │ [•••]     │
│ [ ] Samuel      │ KEB/003/24  │ 45  │ [•••]     │
├────────────────────────────────────────────────────┤
│ Showing 1-25 of 1,234    [← Previous] [Next →]   │
└────────────────────────────────────────────────────┘

Specifications:
- Container:
  - Background: white
  - Border: 1px solid --color-gray-200
  - Border Radius: 8px
  - Box Shadow: --shadow-sm

- Header Row:
  - Background: --color-gray-50
  - Font Weight: 600
  - Font Size: 14px
  - Padding: 12px 16px
  - Border Bottom: 2px solid --color-gray-300

- Data Rows:
  - Padding: 12px 16px
  - Border Bottom: 1px solid --color-gray-200
  - Hover: Background --color-gray-50
  - Selected: Background --color-primary-light

- Sortable Columns:
  - Cursor: pointer
  - Icon: ↕ (default), ↑ (asc), ↓ (desc)
  - Hover: Underline

- Pagination:
  - Background: --color-gray-50
  - Padding: 12px 16px
  - Font Size: 14px
  - Buttons: Secondary button style
```

### Responsive Table (Mobile)
```
Card View:
┌────────────────────────────────┐
│ Ahmed Hassan                   │
│ ──────────────────────────     │
│ ID: KEB/001/2024               │
│ Age: 32                        │
│ Gender: Male                   │
│                                │
│ [View] [Edit] [Delete]         │
└────────────────────────────────┘

Specifications:
- Each row becomes a card
- Key-value pairs stacked vertically
- Actions at bottom of card
- Margin between cards: 16px
```

---

## Navigation Components

### Top Navigation Bar
```
Visual:
┌──────────────────────────────────────────────────┐
│ [Logo] E-Kebele  [Search........] [🔔5] [👤▼]  │
└──────────────────────────────────────────────────┘

Specifications:
- Height: 64px
- Background: white
- Border Bottom: 1px solid --color-gray-200
- Box Shadow: --shadow-sm
- Position: Fixed top
- Z-Index: --z-fixed

- Logo:
  - Height: 40px
  - Margin: 12px 24px

- Search Bar:
  - Max Width: 400px
  - Flex: 1
  - Margin: 0 24px

- Icons:
  - Size: 24x24px
  - Padding: 8px
  - Margin: 0 8px
  - Badge: Notification count
```

### Sidebar Navigation
```
Visual:
┌────────────────────┐
│ E-Kebele           │
├────────────────────┤
│ 🏠 Dashboard       │
│ 👥 Residents     > │
│ 📄 Documents     > │
│ 📰 News          > │
│ 👨‍💼 Admin        > │
│ 📊 Reports       > │
└────────────────────┘

Specifications:
- Width: 240px (expanded), 60px (collapsed)
- Background: --color-gray-900
- Color: white
- Height: 100vh
- Position: Fixed left
- Transition: --transition-base

- Menu Item:
  - Padding: 12px 16px
  - Border Radius: 4px (inside sidebar)
  - Hover: Background rgba(255,255,255,0.1)
  - Active: Background --color-primary-main
  - Icon: 24x24px, margin-right: 12px

- Submenu:
  - Background: rgba(0,0,0,0.2)
  - Padding Left: 48px
  - Font Size: 14px
```

### Breadcrumbs
```
Visual:
Home > Residents > Ahmed Hassan > Edit

Specifications:
- Font Size: 14px
- Color: --text-secondary
- Margin Bottom: 24px

- Links:
  - Color: --color-primary-main
  - Hover: Underline

- Separator:
  - Content: ">"
  - Margin: 0 8px
  - Color: --text-disabled

- Current Page:
  - Color: --text-primary
  - Font Weight: 500
  - Not a link
```

### Tabs
```
Visual:
[Overview] [Documents] [Requests] [History] [Family]
───────────

Specifications:
- Container:
  - Border Bottom: 2px solid --color-gray-200

- Tab:
  - Padding: 12px 24px
  - Font Size: 14px
  - Font Weight: 500
  - Color: --text-secondary
  - Border Bottom: 2px solid transparent
  - Cursor: pointer

- Active Tab:
  - Color: --color-primary-main
  - Border Bottom: 2px solid --color-primary-main

- Hover:
  - Color: --color-primary-main
  - Background: --color-primary-light (subtle)
```

---

## Feedback Components

### Toast Notification
```
Visual:
┌────────────────────────────────┐
│ ✅ Success!              [×]  │
│ Resident saved successfully.   │
└────────────────────────────────┘

Specifications:
- Position: Fixed top-right
- Top: 80px (below header)
- Right: 24px
- Min Width: 300px
- Max Width: 400px
- Background: white
- Border: 1px solid (color varies by type)
- Border Left: 4px solid (color varies by type)
- Border Radius: 4px
- Box Shadow: --shadow-lg
- Padding: 16px
- Z-Index: --z-tooltip

Types:
- Success: Green border/icon
- Error: Red border/icon
- Warning: Orange border/icon
- Info: Blue border/icon

- Icon:
  - Size: 24x24px
  - Float left
  - Margin Right: 12px

- Close Button:
  - Position: Absolute top-right
  - Size: 24x24px
  - Icon button

- Auto-dismiss: 5 seconds
- Animation: Slide in from right, fade out
```

### Modal Dialog
```
Visual:
Background Overlay (dimmed)
┌────────────────────────────────┐
│ Modal Title              [×]  │
├────────────────────────────────┤
│                                │
│  Modal content goes here...    │
│                                │
│  Form fields, text, etc.       │
│                                │
├────────────────────────────────┤
│           [Cancel]  [Confirm]  │
└────────────────────────────────┘

Specifications:
- Backdrop:
  - Background: rgba(0, 0, 0, 0.5)
  - Position: Fixed
  - Top: 0, Left: 0
  - Width: 100vw, Height: 100vh
  - Z-Index: --z-modal-backdrop

- Modal:
  - Background: white
  - Border Radius: 8px
  - Box Shadow: --shadow-xl
  - Max Width: 600px
  - Width: 90vw
  - Position: Fixed (centered)
  - Z-Index: --z-modal
  - Animation: Fade in + scale

- Header:
  - Padding: 24px
  - Border Bottom: 1px solid --color-gray-200
  - Font Size: 20px
  - Font Weight: 500

- Body:
  - Padding: 24px
  - Max Height: 60vh
  - Overflow: Auto

- Footer:
  - Padding: 16px 24px
  - Border Top: 1px solid --color-gray-200
  - Text Align: Right
  - Buttons: Standard button styles
```

### Progress Bar
```
Visual:
Determinate:
[▓▓▓▓▓▓▓▓▓▓░░░░░░] 65%

Indeterminate:
[▓▓▓▓▓━━━━━━━━━━] (animated)

Specifications:
- Height: 4px (thin) or 8px (default)
- Width: 100%
- Background: --color-gray-200
- Border Radius: 2px

- Fill:
  - Background: --color-primary-main
  - Border Radius: 2px
  - Transition: width --transition-base

- Percentage Text (optional):
  - Font Size: 12px
  - Color: --text-secondary
  - Position: Right side or above

- Indeterminate:
  - Animation: Slide left-right
  - Duration: 2s infinite
```

### Loading Spinner
```
Visual:
    ⟲
  
Specifications:
- Size: 40x40px (default)
- Border: 4px solid --color-gray-200
- Border Top: 4px solid --color-primary-main
- Border Radius: 50%
- Animation: Rotate 360deg, 1s linear infinite

Sizes:
- Small: 24x24px, 3px border
- Medium: 40x40px, 4px border
- Large: 64x64px, 6px border
```

### Badge
```
Visual:
Number Badge:    [🔔 5]
Status Badge:    ● Active

Specifications:
- Number Badge:
  - Background: --color-error
  - Color: white
  - Font Size: 11px
  - Font Weight: 600
  - Padding: 2px 6px
  - Border Radius: 10px (pill)
  - Position: Absolute top-right
  - Min Width: 18px
  - Text Align: Center

- Status Badge:
  - Display: Inline-flex
  - Align Items: Center
  - Font Size: 12px
  - Padding: 4px 8px
  - Border Radius: 12px

Status Colors:
- Active: Green background, dark green text
- Pending: Orange background, dark orange text
- Inactive: Gray background, dark gray text
- Error: Red background, dark red text
```

### Tooltip
```
Visual:
        [Button]
          ▼
    ┌───────────┐
    │  Tooltip  │
    │  content  │
    └───────────┘

Specifications:
- Background: --color-gray-900
- Color: white
- Font Size: 12px
- Padding: 8px 12px
- Border Radius: 4px
- Box Shadow: --shadow-md
- Z-Index: --z-tooltip
- Max Width: 200px
- Word Wrap: break-word

- Arrow:
  - Size: 8x8px triangle
  - Same color as background
  - Positioned based on tooltip placement

- Animation:
  - Fade in: 150ms
  - Delay: 300ms (after hover)
```

---

## Icon System

### Icon Guidelines

#### Icon Sizes
```
Extra Small: 16x16px - Used in small buttons, inline text
Small: 20x20px - Used in form inputs, small UI elements
Medium: 24x24px - Default size, most common usage
Large: 32x32px - Used in cards, feature highlights
Extra Large: 48x48px - Used in empty states, onboarding
```

#### Icon Library
Using Font Awesome 5.x:

**Common Icons:**
```
Navigation:
- Home: fas fa-home
- Dashboard: fas fa-tachometer-alt
- Menu: fas fa-bars
- Arrow Left: fas fa-arrow-left
- Arrow Right: fas fa-arrow-right

Users & People:
- User: fas fa-user
- Users: fas fa-users
- User Plus: fas fa-user-plus
- User Edit: fas fa-user-edit

Documents:
- File: fas fa-file
- File Alt: fas fa-file-alt
- File PDF: fas fa-file-pdf
- Folder: fas fa-folder

Actions:
- Edit: fas fa-edit / fas fa-pen
- Delete: fas fa-trash
- Save: fas fa-save
- Print: fas fa-print
- Download: fas fa-download
- Upload: fas fa-upload
- Search: fas fa-search
- Filter: fas fa-filter

Status:
- Check: fas fa-check
- Times: fas fa-times
- Exclamation: fas fa-exclamation-triangle
- Info: fas fa-info-circle
- Bell: fas fa-bell

Misc:
- Cog/Settings: fas fa-cog
- Calendar: fas fa-calendar
- Clock: fas fa-clock
- Location: fas fa-map-marker-alt
- Phone: fas fa-phone
- Email: fas fa-envelope
```

---

## Layout Grid

### 12-Column Grid System

```
Desktop (≥992px):
┌──┬──┬──┬──┬──┬──┬──┬──┬──┬──┬──┬──┐
│ 1│ 2│ 3│ 4│ 5│ 6│ 7│ 8│ 9│10│11│12│
└──┴──┴──┴──┴──┴──┴──┴──┴──┴──┴──┴──┘

Example Layouts:
- 2 columns: 6+6
- 3 columns: 4+4+4
- 4 columns: 3+3+3+3
- Sidebar + Content: 3+9 or 4+8
```

### Container Widths
```css
--container-sm: 540px;   /* Small devices */
--container-md: 720px;   /* Medium devices */
--container-lg: 960px;   /* Large devices */
--container-xl: 1140px;  /* Extra large devices */
--container-fluid: 100%; /* Full width */
```

### Spacing Classes
```
.m-0  { margin: 0; }
.m-1  { margin: 4px; }   /* --space-xs */
.m-2  { margin: 8px; }   /* --space-sm */
.m-3  { margin: 16px; }  /* --space-md */
.m-4  { margin: 24px; }  /* --space-lg */
.m-5  { margin: 32px; }  /* --space-xl */

.p-0  { padding: 0; }
.p-1  { padding: 4px; }
.p-2  { padding: 8px; }
.p-3  { padding: 16px; }
.p-4  { padding: 24px; }
.p-5  { padding: 32px; }

Directional:
.mt-3 { margin-top: 16px; }
.mb-3 { margin-bottom: 16px; }
.ml-3 { margin-left: 16px; }
.mr-3 { margin-right: 16px; }
.mx-3 { margin-left: 16px; margin-right: 16px; }
.my-3 { margin-top: 16px; margin-bottom: 16px; }

(Same pattern for padding: pt, pb, pl, pr, px, py)
```

---

## Implementation Notes

### CSS Architecture
```
styles/
├── base/
│   ├── reset.css
│   ├── typography.css
│   └── variables.css
├── components/
│   ├── buttons.css
│   ├── forms.css
│   ├── cards.css
│   ├── tables.css
│   └── navigation.css
├── layout/
│   ├── grid.css
│   ├── header.css
│   ├── sidebar.css
│   └── footer.css
├── utilities/
│   ├── spacing.css
│   ├── colors.css
│   └── helpers.css
└── main.css (imports all)
```

### Component Naming Convention
```
BEM (Block Element Modifier):

.button                    /* Block */
.button__icon              /* Element */
.button--primary           /* Modifier */
.button--large             /* Modifier */

Example:
<button class="button button--primary button--large">
  <span class="button__icon">🔍</span>
  <span class="button__text">Search</span>
</button>
```

### Accessibility Requirements
```
1. All interactive elements must be keyboard accessible
2. Focus states must be visible
3. Color contrast must meet WCAG AA standards (4.5:1)
4. ARIA labels for screen readers
5. Alt text for all images
6. Semantic HTML elements
7. Form labels properly associated
8. Error messages announced to screen readers
```

---

## Conclusion

This component library provides:

1. **Consistent Design Tokens** for colors, spacing, typography
2. **Reusable Components** with detailed specifications
3. **Accessibility Guidelines** for inclusive design
4. **Implementation Standards** for maintainable code
5. **Responsive Patterns** for all screen sizes

Use these specifications when implementing the E-Kebele UI to ensure consistency across the entire application.

---

**Document End**
