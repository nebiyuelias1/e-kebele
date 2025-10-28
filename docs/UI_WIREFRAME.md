# E-Kebele Web Application - UI Wireframe

## Document Information
- **Project**: E-Kebele Administrative System
- **Purpose**: Wireframe specification for web application UI
- **Framework**: CodeIgniter + Material Design Bootstrap (MDB)
- **Date**: October 2025
- **Version**: 1.0

---

## Table of Contents
1. [Overview](#overview)
2. [Design Principles](#design-principles)
3. [Color Scheme & Branding](#color-scheme--branding)
4. [Page Layouts](#page-layouts)
5. [Navigation Structure](#navigation-structure)
6. [Responsive Design](#responsive-design)
7. [User Flows](#user-flows)

---

## Overview

### Application Purpose
E-Kebele is a comprehensive administrative system designed to automate and streamline tasks performed in Ethiopian kebele (neighborhood) administrative offices. The system handles:
- Resident registration and management
- Document requests and processing
- News and announcements
- User authentication and role management
- Administrative workflows

### Target Users
- **Administrators**: Full system access, user management, configuration
- **Staff Members**: Process requests, manage residents, update information
- **Residents**: View information, submit requests, check status
- **Guests**: Public information access (news, about page)

---

## Design Principles

### 1. Simplicity & Clarity
- Clean, uncluttered interface
- Clear visual hierarchy
- Intuitive navigation
- Consistent terminology

### 2. Efficiency
- Quick access to common tasks
- Minimal clicks to complete actions
- Bulk operations support
- Keyboard shortcuts for power users

### 3. Accessibility
- WCAG 2.1 AA compliance
- High contrast text
- Screen reader friendly
- Keyboard navigation support

### 4. Professional Appearance
- Modern, trustworthy design
- Government/administrative feel
- Material Design principles
- Ethiopian cultural elements (subtle)

---

## Color Scheme & Branding

### Primary Colors
```
Primary Blue:     #1976D2 (Trust, Authority)
Primary Dark:     #0D47A1
Primary Light:    #BBDEFB
Accent Green:     #4CAF50 (Success, Approval)
Accent Orange:    #FF9800 (Warnings, Pending)
Accent Red:       #F44336 (Errors, Rejections)
```

### Neutral Colors
```
Background:       #F5F5F5 (Light Gray)
Card Background:  #FFFFFF (White)
Text Primary:     #212121 (Dark Gray)
Text Secondary:   #757575 (Medium Gray)
Border:           #E0E0E0 (Light Border)
Divider:          #BDBDBD
```

### Logo & Branding
- Logo placement: Top-left corner (180x60px recommended)
- App name: "E-Kebele" with Ethiopian flag colors accent (Green-Yellow-Red)
- Tagline: "Modern Kebele Administration"

---

## Page Layouts

### 1. AUTHENTICATION PAGES

#### 1.1 Login Page
```
┌────────────────────────────────────────────────────┐
│                                                    │
│              [Logo] E-Kebele                       │
│         Modern Kebele Administration               │
│                                                    │
│   ┌──────────────────────────────────────┐       │
│   │                                      │       │
│   │    Sign In to Your Account          │       │
│   │                                      │       │
│   │    Email/Username                    │       │
│   │    [___________________________]     │       │
│   │                                      │       │
│   │    Password                          │       │
│   │    [___________________________]     │       │
│   │                                      │       │
│   │    [x] Remember Me                   │       │
│   │                                      │       │
│   │    [    Sign In Button    ]         │       │
│   │                                      │       │
│   │    Forgot Password?                  │       │
│   │                                      │       │
│   └──────────────────────────────────────┘       │
│                                                    │
│              © 2025 E-Kebele System                │
└────────────────────────────────────────────────────┘
```

**Features:**
- Centered card layout
- Clean, minimal design
- Validation messages below fields
- "Forgot Password" link
- Social login options (optional for future)
- Background: Subtle gradient or abstract pattern

#### 1.2 Password Reset Page
```
┌────────────────────────────────────────────────────┐
│                                                    │
│   ← Back to Login        [Logo] E-Kebele          │
│                                                    │
│   ┌──────────────────────────────────────┐       │
│   │                                      │       │
│   │    Reset Your Password              │       │
│   │                                      │       │
│   │    Enter your email address and     │       │
│   │    we'll send you instructions.     │       │
│   │                                      │       │
│   │    Email Address                     │       │
│   │    [___________________________]     │       │
│   │                                      │       │
│   │    [   Send Reset Link   ]          │       │
│   │                                      │       │
│   └──────────────────────────────────────┘       │
│                                                    │
└────────────────────────────────────────────────────┘
```

---

### 2. MAIN DASHBOARD LAYOUT

#### 2.1 Header Section
```
┌─────────────────────────────────────────────────────────────────┐
│ [Logo] E-Kebele    [Search Bar...................] [🔔] [👤▼]  │
│                                                    (5)  Profile  │
└─────────────────────────────────────────────────────────────────┘
```

**Components:**
- **Logo**: Clickable, returns to dashboard
- **Search Bar**: Global search (residents, documents, etc.)
- **Notifications Bell**: Badge with unread count
- **Profile Dropdown**: 
  - Profile Settings
  - Change Password
  - Help & Support
  - Logout

#### 2.2 Sidebar Navigation
```
┌──────────────────────────┐
│                          │
│  Navigation Menu         │
│  ────────────────        │
│                          │
│  🏠 Dashboard            │
│                          │
│  👥 Residents            │
│    • View All           │
│    • Add New            │
│    • Search             │
│    • Reports            │
│                          │
│  📄 Documents            │
│    • ID Cards           │
│    • Certificates       │
│    • Letters            │
│    • Requests           │
│                          │
│  📰 News                 │
│    • All Posts          │
│    • Add New            │
│    • Categories         │
│                          │
│  👨‍💼 Administration       │
│    • Users              │
│    • Groups             │
│    • Settings           │
│    • Audit Log          │
│                          │
│  📊 Reports              │
│    • Statistics         │
│    • Analytics          │
│    • Export Data        │
│                          │
└──────────────────────────┘
```

**Features:**
- Collapsible sidebar (hamburger menu)
- Icons for each menu item
- Active page highlighting
- Sub-menu expansion
- Sticky positioning

#### 2.3 Dashboard Main Content
```
┌────────────────────────────────────────────────────────────────────┐
│                                                                    │
│  Dashboard Overview                                                │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  ┌──────────────┐  ┌──────────────┐  ┌──────────────┐  ┌────────┐│
│  │   📊 1,234   │  │   📝 567     │  │   ✅ 89      │  │  ⏳ 23 ││
│  │              │  │              │  │              │  │        ││
│  │  Total       │  │  Documents   │  │  Completed   │  │ Pending││
│  │  Residents   │  │  This Month  │  │  Today       │  │ Urgent ││
│  │              │  │              │  │              │  │        ││
│  │  +5% ↑       │  │  +12% ↑      │  │  +8% ↑       │  │ +2 ↑   ││
│  └──────────────┘  └──────────────┘  └──────────────┘  └────────┘│
│                                                                    │
│  Quick Actions                                                     │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  [+ New Resident] [+ Issue Document] [+ Post News] [📊 Reports]   │
│                                                                    │
│  Recent Activities                      Latest Document Requests   │
│  ──────────────────────────────────     ──────────────────────── │
│                                                                    │
│  ┌──────────────────────────────┐      ┌────────────────────────┐│
│  │ • User added resident        │      │ Ahmed Hassan           ││
│  │   John Doe                   │      │ Birth Certificate      ││
│  │   2 minutes ago              │      │ Status: Pending        ││
│  │                              │      │                        ││
│  │ • Document approved          │      │ Fatima Mohammed        ││
│  │   ID Card for Jane Smith     │      │ ID Card Renewal        ││
│  │   15 minutes ago             │      │ Status: In Progress    ││
│  │                              │      │                        ││
│  │ • New news posted            │      │ Samuel Tadesse         ││
│  │   Community Meeting          │      │ Residence Letter       ││
│  │   1 hour ago                 │      │ Status: Approved ✓     ││
│  │                              │      │                        ││
│  │ [View All Activities...]     │      │ [View All Requests...] ││
│  └──────────────────────────────┘      └────────────────────────┘│
│                                                                    │
│  Upcoming Events & Reminders                                      │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  📅 Community Meeting - Tomorrow at 10:00 AM                      │
│  📅 Monthly Report Due - In 3 days                                │
│  📅 System Maintenance - Friday 11:00 PM                          │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

**Features:**
- Statistics cards with trend indicators
- Quick action buttons
- Real-time activity feed
- Document request queue
- Calendar/reminder widget
- Responsive grid layout

---

### 3. RESIDENTS MANAGEMENT

#### 3.1 Residents List View
```
┌────────────────────────────────────────────────────────────────────┐
│  Residents Management                                              │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  [+ Add New Resident]                    [🔍 Search...] [⚙️ Filter]│
│                                                                    │
│  Showing 1-25 of 1,234 residents                                  │
│                                                                    │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │ [✓] Photo  Name            ID Number   Age  Gender  Actions  │ │
│  ├──────────────────────────────────────────────────────────────┤ │
│  │ [ ] 👤 Ahmed Hassan        KEB/001/2024 32   Male    [•••]   │ │
│  │ [ ] 👤 Fatima Mohammed     KEB/002/2024 28   Female  [•••]   │ │
│  │ [ ] 👤 Samuel Tadesse      KEB/003/2024 45   Male    [•••]   │ │
│  │ [ ] 👤 Marta Alemayehu     KEB/004/2024 37   Female  [•••]   │ │
│  │ [ ] 👤 Yohannes Bekele     KEB/005/2024 52   Male    [•••]   │ │
│  │ [ ] 👤 Tigist Kebede       KEB/006/2024 29   Female  [•••]   │ │
│  │ ...                                                           │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  [Bulk Actions ▼]              [← Previous] Page 1 of 50 [Next →] │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

**Features:**
- Searchable/filterable data table
- Sortable columns
- Bulk selection and actions
- Pagination
- Quick actions menu (Edit, View, Delete, Documents)
- Export functionality
- Profile photo thumbnails
- Color-coded status indicators

#### 3.2 Add/Edit Resident Form
```
┌────────────────────────────────────────────────────────────────────┐
│  ← Back to Residents                                               │
│                                                                    │
│  Add New Resident                                                  │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  Personal Information                                              │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │                                                              │ │
│  │  Profile Photo                First Name         Last Name  │ │
│  │  ┌────────┐                  [____________]     [__________]│ │
│  │  │        │                                                 │ │
│  │  │  📷    │                  Middle Name         Date of    │ │
│  │  │ Upload │                  [____________]      Birth      │ │
│  │  └────────┘                                     [MM/DD/YYYY]│ │
│  │                                                              │ │
│  │  Gender                      National ID                    │ │
│  │  ( ) Male  ( ) Female        [________________]             │ │
│  │                                                              │ │
│  │  Phone Number                Email                          │ │
│  │  [________________]          [________________]             │ │
│  │                                                              │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  Address Information                                               │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │                                                              │ │
│  │  House Number                Woreda                         │ │
│  │  [____________]              [Dropdown ▼]                   │ │
│  │                                                              │ │
│  │  Kebele                      City/Town                      │ │
│  │  [____________]              [____________]                 │ │
│  │                                                              │ │
│  │  Street Address                                             │ │
│  │  [___________________________________________]              │ │
│  │                                                              │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  Emergency Contact                                                 │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │  Contact Name                Relationship                   │ │
│  │  [________________]          [Dropdown ▼]                   │ │
│  │                                                              │ │
│  │  Phone Number                Email                          │ │
│  │  [________________]          [________________]             │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  Additional Information (Optional)                                 │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │  Occupation                  Education Level                │ │
│  │  [________________]          [Dropdown ▼]                   │ │
│  │                                                              │ │
│  │  Notes                                                       │ │
│  │  [___________________________________________]              │ │
│  │  [___________________________________________]              │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│                      [Cancel]  [Save as Draft]  [Save & Register] │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

**Features:**
- Multi-section form with clear grouping
- Image upload with preview
- Dropdown selections with search
- Date picker
- Field validation (real-time)
- Auto-save draft
- Progress indicator for multi-step process
- Required field indicators (*)

#### 3.3 Resident Profile View
```
┌────────────────────────────────────────────────────────────────────┐
│  ← Back to Residents                                [Edit] [Delete]│
│                                                                    │
│  ┌────────────┐  Ahmed Hassan                                     │
│  │            │  ID: KEB/001/2024                                 │
│  │   Photo    │  Status: ● Active                                 │
│  │            │  Member since: Jan 15, 2024                       │
│  └────────────┘                                                    │
│                                                                    │
│  [Overview] [Documents] [Requests] [History] [Family]             │
│  ──────────────────────────────────────────────────────────────── │
│                                                                    │
│  Personal Information                Contact Information           │
│  ┌──────────────────────────┐      ┌──────────────────────────┐  │
│  │ Gender:      Male         │      │ Phone:   +251-xxx-xxxx  │  │
│  │ Age:         32 years     │      │ Email:   ahmed@email... │  │
│  │ Birth Date:  Jan 1, 1992  │      │ Address: House 123,     │  │
│  │ National ID: xxx-xxx-xxx  │      │          Kebele 05      │  │
│  └──────────────────────────┘      └──────────────────────────┘  │
│                                                                    │
│  Recent Documents                    Recent Activities             │
│  ┌──────────────────────────┐      ┌──────────────────────────┐  │
│  │ 📄 ID Card                │      │ • Document request       │  │
│  │    Issued: Mar 1, 2024    │      │   submitted              │  │
│  │    Status: Valid          │      │   2 days ago             │  │
│  │                           │      │                          │  │
│  │ 📄 Birth Certificate      │      │ • Profile updated        │  │
│  │    Issued: Feb 15, 2024   │      │   1 week ago             │  │
│  │    Status: Valid          │      │                          │  │
│  │                           │      │ • Registered in system   │  │
│  │ [View All Documents...]   │      │   Jan 15, 2024           │  │
│  └──────────────────────────┘      └──────────────────────────┘  │
│                                                                    │
│  Quick Actions                                                     │
│  [Issue Document] [Request Certificate] [Print Profile] [Export]  │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

**Features:**
- Profile photo display
- Status indicator
- Tabbed navigation
- Information cards
- Recent activity timeline
- Quick action buttons
- Document history
- Print/Export options

---

### 4. DOCUMENTS MANAGEMENT

#### 4.1 Document Requests Dashboard
```
┌────────────────────────────────────────────────────────────────────┐
│  Document Requests                                                 │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  [All (156)] [Pending (23)] [In Progress (45)] [Completed (88)]   │
│                                                                    │
│  [🔍 Search requests...]           [Filter ▼] [Sort by: Date ▼]    │
│                                                                    │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │ Request ID  Resident Name    Document Type   Status   Actions │ │
│  ├──────────────────────────────────────────────────────────────┤ │
│  │ REQ-001     Ahmed Hassan     ID Card         🟡 Pending [•••]│ │
│  │ REQ-002     Fatima Mohammed  Birth Cert      🔵 Progress [•••]│ │
│  │ REQ-003     Samuel Tadesse   Residence       ✅ Completed[•••]│ │
│  │ REQ-004     Marta Alemayehu  Marriage        🔵 Progress [•••]│ │
│  │ REQ-005     Yohannes Bekele  Death Cert      🟡 Pending [•••]│ │
│  │ ...                                                           │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  [← Previous] Page 1 of 7 [Next →]                                │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

#### 4.2 Document Request Details
```
┌────────────────────────────────────────────────────────────────────┐
│  ← Back to Requests                                                │
│                                                                    │
│  Request #REQ-001 - ID Card Request                                │
│  Status: 🟡 Pending Review                                         │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  Applicant Information              Request Details                │
│  ┌──────────────────────┐          ┌──────────────────────────┐  │
│  │ Name:   Ahmed Hassan │          │ Document: ID Card        │  │
│  │ ID:     KEB/001/2024 │          │ Date:     Oct 25, 2025   │  │
│  │ Phone:  +251-xxx     │          │ Priority: Normal         │  │
│  │ Email:  ahmed@...    │          │ Fee:      50 Birr        │  │
│  └──────────────────────┘          └──────────────────────────┘  │
│                                                                    │
│  Processing Timeline                                               │
│  ─────────────────────────────────────────────────────────────    │
│                                                                    │
│  ✅ Submitted          Oct 25, 2025 10:00 AM                       │
│  ⏳ Under Review       (Current)                                   │
│  ⏺ Verification        Not Started                                │
│  ⏺ Approval            Not Started                                │
│  ⏺ Printing            Not Started                                │
│  ⏺ Ready for Pickup    Not Started                                │
│                                                                    │
│  Attached Documents                                                │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │ 📎 photo.jpg (250 KB)                          [View] [Delete]│ │
│  │ 📎 birth_certificate.pdf (1.2 MB)             [View] [Delete]│ │
│  │                                                              │ │
│  │ [+ Upload Additional Document]                              │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  Notes & Comments                                                  │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │ Staff User - Oct 26, 2025 9:00 AM                           │ │
│  │ "Photo quality needs improvement. Please resubmit."         │ │
│  │                                                              │ │
│  │ [Add Comment...]                                 [Send]     │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  Actions                                                           │
│  [Approve] [Request Changes] [Reject] [Print] [Export]           │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

**Features:**
- Status indicator with color coding
- Progress timeline/stepper
- File attachments with preview
- Comment/note system
- Action buttons based on user role
- Document history
- Print/Export functionality

---

### 5. NEWS & ANNOUNCEMENTS

#### 5.1 News List View
```
┌────────────────────────────────────────────────────────────────────┐
│  News & Announcements                          [+ Create New Post] │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  [All] [Announcements] [Events] [Updates] [Emergency]             │
│                                                                    │
│  Featured Post                                                     │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │ [Large Featured Image]                                       │ │
│  │                                                              │ │
│  │ Community Meeting Scheduled for November                    │ │
│  │ Posted 2 hours ago • By Admin • 🏷️ Announcement            │ │
│  │                                                              │ │
│  │ Join us for an important community meeting to discuss...    │ │
│  │                                                              │ │
│  │ [Read More →]                                                │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  Recent Posts                                                      │
│  ┌────────────┬───────────────────────────────────────────────┐  │
│  │[Thumbnail] │ New ID Card Distribution Schedule              │  │
│  │   Image    │ Posted 5 hours ago • 125 views                 │  │
│  │            │ The new batch of ID cards will be...           │  │
│  └────────────┴───────────────────────────────────────────────┘  │
│  ┌────────────┬───────────────────────────────────────────────┐  │
│  │[Thumbnail] │ Office Hours Extended This Week                │  │
│  │   Image    │ Posted 1 day ago • 89 views                    │  │
│  │            │ Due to high demand, office hours will...       │  │
│  └────────────┴───────────────────────────────────────────────┘  │
│  ┌────────────┬───────────────────────────────────────────────┐  │
│  │[Thumbnail] │ Health Campaign Starting Monday                │  │
│  │   Image    │ Posted 2 days ago • 203 views                  │  │
│  │            │ Free health screening will be available...     │  │
│  └────────────┴───────────────────────────────────────────────┘  │
│                                                                    │
│  [Load More Posts...]                                              │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

#### 5.2 Create/Edit News Post
```
┌────────────────────────────────────────────────────────────────────┐
│  ← Back to News                                                    │
│                                                                    │
│  Create New Post                                                   │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  Post Title                                                        │
│  [_______________________________________________]                 │
│                                                                    │
│  Category                        Priority                          │
│  [Dropdown ▼]                   ( ) Normal  (•) High  ( ) Urgent  │
│                                                                    │
│  Featured Image                                                    │
│  ┌────────────────────┐                                            │
│  │                    │  [Upload Image] [Choose from Library]     │
│  │   Drop image       │                                            │
│  │   here or click    │  Recommended size: 1200x630px              │
│  │                    │                                            │
│  └────────────────────┘                                            │
│                                                                    │
│  Content                                                           │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │ [B] [I] [U] [List] [Link] [Image] [Table] [Quote]           │ │
│  ├──────────────────────────────────────────────────────────────┤ │
│  │                                                              │ │
│  │                                                              │ │
│  │  [Rich text editor area]                                    │ │
│  │                                                              │ │
│  │                                                              │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  Tags                                                              │
│  [Tag1] [Tag2] [+]  [___________]                                 │
│                                                                    │
│  Scheduling                                                        │
│  (•) Publish immediately   ( ) Schedule for later [Date Picker]   │
│                                                                    │
│  Visibility                                                        │
│  (•) Public   ( ) Registered Users Only   ( ) Staff Only          │
│                                                                    │
│  Notifications                                                     │
│  [✓] Send email notification to subscribers                       │
│  [✓] Show as pop-up notification                                  │
│                                                                    │
│           [Cancel]  [Save as Draft]  [Preview]  [Publish]        │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

**Features:**
- WYSIWYG rich text editor
- Image upload and management
- Category and tag system
- Scheduling options
- Visibility controls
- Notification options
- Draft saving
- Preview functionality

---

### 6. ADMINISTRATION

#### 6.1 User Management
```
┌────────────────────────────────────────────────────────────────────┐
│  User Management                               [+ Add New User]    │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  [🔍 Search users...]                 [Filter by Role ▼] [Export] │
│                                                                    │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │ User         Email          Role       Status    Last Login  │ │
│  ├──────────────────────────────────────────────────────────────┤ │
│  │ 👤 Admin     admin@...      Admin      ● Active  2 min ago   │ │
│  │ 👤 John Doe  john@...       Staff      ● Active  1 hr ago    │ │
│  │ 👤 Jane Doe  jane@...       Staff      ● Active  Today       │ │
│  │ 👤 Bob Smith bob@...        Viewer     ○ Inactive Yesterday  │ │
│  │ ...                                                           │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│  User Groups                                                       │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │ Group Name     Members    Permissions              Actions   │ │
│  ├──────────────────────────────────────────────────────────────┤ │
│  │ Administrators    3       Full Access              [Edit]    │ │
│  │ Staff Members    12       Manage Residents...      [Edit]    │ │
│  │ Viewers           5       Read Only                [Edit]    │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

#### 6.2 System Settings
```
┌────────────────────────────────────────────────────────────────────┐
│  System Settings                                                   │
│  ────────────────────────────────────────────────────────────────  │
│                                                                    │
│  [General] [Security] [Email] [Notifications] [Backup] [Advanced] │
│                                                                    │
│  General Settings                                                  │
│  ┌──────────────────────────────────────────────────────────────┐ │
│  │                                                              │ │
│  │  Site Name                                                   │ │
│  │  [E-Kebele Administrative System]                           │ │
│  │                                                              │ │
│  │  Kebele Name                                                 │ │
│  │  [________________________________]                          │ │
│  │                                                              │ │
│  │  Admin Email                                                 │ │
│  │  [________________________________]                          │ │
│  │                                                              │ │
│  │  Timezone                                                    │ │
│  │  [East Africa Time (EAT) ▼]                                 │ │
│  │                                                              │ │
│  │  Language                                                    │ │
│  │  [English ▼]  (Amharic support coming soon)                │ │
│  │                                                              │ │
│  │  Date Format                                                 │ │
│  │  ( ) MM/DD/YYYY  (•) DD/MM/YYYY  ( ) YYYY-MM-DD            │ │
│  │                                                              │ │
│  │  Maintenance Mode                                            │ │
│  │  [  ] Enable Maintenance Mode                               │ │
│  │      (Shows maintenance page to all users except admins)    │ │
│  │                                                              │ │
│  └──────────────────────────────────────────────────────────────┘ │
│                                                                    │
│                                          [Cancel]  [Save Changes] │
│                                                                    │
└────────────────────────────────────────────────────────────────────┘
```

---

## Navigation Structure

### Main Navigation Flow
```
Login Page
    ↓
Dashboard (Home)
    ├── Residents
    │   ├── View All Residents
    │   ├── Add New Resident
    │   ├── Search Residents
    │   └── Resident Profile
    │       ├── Overview
    │       ├── Documents
    │       ├── Requests
    │       ├── History
    │       └── Family Members
    │
    ├── Documents
    │   ├── All Requests
    │   ├── Pending Requests
    │   ├── In Progress
    │   ├── Completed
    │   └── Document Types
    │       ├── ID Cards
    │       ├── Birth Certificates
    │       ├── Marriage Certificates
    │       └── Letters/Others
    │
    ├── News & Announcements
    │   ├── All Posts
    │   ├── Create New Post
    │   ├── Categories
    │   └── View Post
    │
    ├── Administration
    │   ├── User Management
    │   │   ├── Users List
    │   │   ├── Add User
    │   │   └── User Groups
    │   ├── Settings
    │   └── Audit Log
    │
    └── Reports
        ├── Statistics Dashboard
        ├── Analytics
        └── Export Data
```

### Breadcrumb Example
```
Home > Residents > Ahmed Hassan > Documents > ID Card Request
```

---

## Responsive Design

### Breakpoints
```
Mobile:     < 576px  (1 column, stacked layout)
Tablet:     576-991px  (Collapsible sidebar, 2 columns)
Desktop:    992-1199px (Full sidebar, 3-4 columns)
Large:      ≥ 1200px   (Full features, 4+ columns)
```

### Mobile Considerations

#### Mobile Header
```
┌─────────────────────────────────┐
│ [☰] E-Kebele    [🔔] [👤]      │
└─────────────────────────────────┘
```

#### Mobile Navigation (Slide-out)
```
┌──────────────────┐
│ [×] Close        │
│                  │
│ 👤 User Name     │
│ ────────────     │
│                  │
│ 🏠 Dashboard     │
│ 👥 Residents     │
│ 📄 Documents     │
│ 📰 News          │
│ 👨‍💼 Admin         │
│ 📊 Reports       │
│                  │
│ 🚪 Logout        │
└──────────────────┘
```

#### Mobile Cards Stack Vertically
- Dashboard stats: 1 per row
- Forms: Full width inputs
- Tables: Horizontal scroll or card view
- Action buttons: Full width

---

## User Flows

### Flow 1: Register New Resident
```
1. Login to System
2. Navigate to Residents > Add New
3. Fill Personal Information
4. Upload Photo
5. Fill Address Details
6. Add Emergency Contact
7. Review Information
8. Click "Save & Register"
9. View Success Message
10. Redirect to Resident Profile
```

### Flow 2: Process Document Request
```
1. Login to System
2. Dashboard shows pending requests
3. Click on Request in queue
4. Review request details
5. Verify attached documents
6. Add processing note
7. Change status (Approve/Request Changes/Reject)
8. System sends notification to resident
9. Print document (if approved)
10. Mark as "Ready for Pickup"
```

### Flow 3: Post News Announcement
```
1. Login to System
2. Navigate to News > Create New
3. Enter post title
4. Select category and priority
5. Upload featured image
6. Write content in editor
7. Add tags
8. Choose visibility and scheduling
9. Preview post
10. Publish
11. Optional: Send notification to users
```

---

## Additional UI Components

### Data Tables
- Sortable columns (click header)
- Search/filter box
- Pagination controls
- Rows per page selector
- Export options (CSV, Excel, PDF)
- Column visibility toggle
- Responsive: Card view on mobile

### Forms
- Clear labels above fields
- Placeholder text for guidance
- Real-time validation
- Error messages below fields
- Success indicators (green checkmarks)
- Required field markers (*)
- Help tooltips (?)
- Auto-save for long forms

### Modals/Dialogs
- Confirmation dialogs
- Quick edit modals
- Image preview lightbox
- Help/information overlays
- Warning/error alerts

### Notifications
- Toast messages (top-right corner)
- Success (green)
- Error (red)
- Warning (orange)
- Info (blue)
- Auto-dismiss after 5 seconds
- Close button

### Status Indicators
```
● Active     (Green)
● Pending    (Orange)
● Completed  (Blue)
○ Inactive   (Gray)
● Urgent     (Red)
```

---

## Accessibility Features

1. **Keyboard Navigation**
   - Tab through all interactive elements
   - Escape to close modals
   - Enter to submit forms
   - Arrow keys for dropdown menus

2. **Screen Reader Support**
   - ARIA labels on all buttons
   - Alt text for all images
   - Proper heading hierarchy (H1-H6)
   - Form labels associated with inputs

3. **Visual Accessibility**
   - Minimum contrast ratio: 4.5:1
   - Focus indicators on all interactive elements
   - No information conveyed by color alone
   - Resizable text up to 200%

4. **Error Handling**
   - Clear error messages
   - Descriptive validation
   - Form error summaries
   - Undo options for destructive actions

---

## Technical Implementation Notes

### Framework & Libraries
- **Backend**: CodeIgniter 3.x (PHP)
- **Frontend**: Material Design Bootstrap (MDB)
- **Icons**: Font Awesome 5.x
- **Charts**: Chart.js or similar
- **Data Tables**: DataTables.js
- **Forms**: Bootstrap form validation
- **WYSIWYG**: TinyMCE or CKEditor

### Browser Support
- Chrome/Edge (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Android)

### Performance Targets
- First Contentful Paint: < 1.5s
- Time to Interactive: < 3.5s
- Page load: < 2s on 3G
- Image optimization: WebP format
- Lazy loading for images
- Minified CSS/JS

---

## Future Enhancements

### Phase 2 Features
- Multi-language support (Amharic, Oromo, Tigrinya)
- SMS notifications
- Mobile app (iOS/Android)
- Digital signatures
- Payment integration
- QR code generation for documents
- Advanced reporting with data visualization
- API for third-party integrations

### Advanced Features
- AI-powered document verification
- Facial recognition for identity verification
- Blockchain for document authenticity
- Real-time chat support
- Video call consultations
- Online appointment booking
- Document templates library
- Workflow automation builder

---

## Design Assets Needed

### Graphics
- Logo (SVG, PNG - multiple sizes)
- Favicon (ICO, PNG)
- Default profile avatar
- Placeholder images
- Icon set for document types
- Loading spinners/animations

### Typography
- Primary: Roboto (Material Design standard)
- Headings: 24px, 20px, 16px (bold)
- Body: 14px (regular)
- Small text: 12px

### Spacing System
```
xs:  4px
sm:  8px
md:  16px
lg:  24px
xl:  32px
xxl: 48px
```

---

## Conclusion

This wireframe provides a comprehensive blueprint for the E-Kebele web application UI. The design focuses on:

1. **User-Friendliness**: Clean, intuitive interface
2. **Efficiency**: Streamlined workflows for common tasks
3. **Accessibility**: WCAG 2.1 compliance
4. **Scalability**: Modular design for future features
5. **Professional Appearance**: Modern, trustworthy aesthetic
6. **Responsiveness**: Works seamlessly on all devices

The wireframe should be reviewed with stakeholders and can be adjusted based on specific kebele requirements, user feedback, and technical constraints.

---

**Document End**
