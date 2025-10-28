# E-Kebele UI - Site Map and User Flow Diagrams

## Document Information
- **Project**: E-Kebele Administrative System
- **Purpose**: Visual site structure and user flow documentation
- **Date**: October 2025
- **Version**: 1.0

---

## Site Map

### Complete Application Structure

```
E-KEBELE WEB APPLICATION
│
├── PUBLIC (Unauthenticated)
│   ├── Login Page
│   ├── Forgot Password
│   ├── Reset Password
│   └── Public News/Announcements (Optional)
│
└── AUTHENTICATED (After Login)
    │
    ├── DASHBOARD (Home)
    │   ├── Statistics Overview
    │   ├── Quick Actions
    │   ├── Recent Activities
    │   ├── Document Requests Queue
    │   └── Upcoming Events
    │
    ├── RESIDENTS MODULE
    │   ├── View All Residents
    │   │   ├── Search/Filter Interface
    │   │   ├── Data Table View
    │   │   ├── Bulk Actions
    │   │   └── Export Options
    │   │
    │   ├── Add New Resident
    │   │   ├── Personal Information Form
    │   │   ├── Address Information Form
    │   │   ├── Emergency Contact Form
    │   │   ├── Additional Information
    │   │   └── Photo Upload
    │   │
    │   ├── Resident Profile
    │   │   ├── Overview Tab
    │   │   │   ├── Personal Details
    │   │   │   ├── Contact Information
    │   │   │   └── Quick Actions
    │   │   │
    │   │   ├── Documents Tab
    │   │   │   ├── Issued Documents List
    │   │   │   ├── Document Status
    │   │   │   └── Issue New Document
    │   │   │
    │   │   ├── Requests Tab
    │   │   │   ├── Active Requests
    │   │   │   ├── Pending Requests
    │   │   │   └── Request History
    │   │   │
    │   │   ├── History Tab
    │   │   │   ├── Activity Timeline
    │   │   │   ├── Changes Log
    │   │   │   └── Audit Trail
    │   │   │
    │   │   └── Family Tab
    │   │       ├── Family Members List
    │   │       ├── Relationships
    │   │       └── Add Family Member
    │   │
    │   ├── Edit Resident
    │   │   └── (Same form as Add New)
    │   │
    │   └── Resident Reports
    │       ├── Demographics Report
    │       ├── Registration Statistics
    │       └── Custom Reports
    │
    ├── DOCUMENTS MODULE
    │   ├── All Document Requests
    │   │   ├── Filter by Status
    │   │   ├── Filter by Type
    │   │   ├── Sort Options
    │   │   └── Search
    │   │
    │   ├── Document Request Details
    │   │   ├── Applicant Information
    │   │   ├── Request Details
    │   │   ├── Processing Timeline
    │   │   ├── Attached Files
    │   │   ├── Comments/Notes
    │   │   └── Action Buttons
    │   │
    │   ├── Document Types
    │   │   ├── ID Cards
    │   │   │   ├── New Applications
    │   │   │   ├── Renewals
    │   │   │   └── Replacements
    │   │   │
    │   │   ├── Birth Certificates
    │   │   │   ├── New Registrations
    │   │   │   └── Copies
    │   │   │
    │   │   ├── Marriage Certificates
    │   │   │   ├── New Registrations
    │   │   │   └── Copies
    │   │   │
    │   │   ├── Death Certificates
    │   │   │   ├── New Registrations
    │   │   │   └── Copies
    │   │   │
    │   │   └── Letters/Others
    │   │       ├── Residence Letter
    │   │       ├── Income Letter
    │   │       └── Custom Letters
    │   │
    │   ├── Issue New Document
    │   │   ├── Select Document Type
    │   │   ├── Select Resident
    │   │   ├── Fill Required Information
    │   │   ├── Upload Supporting Documents
    │   │   └── Submit Request
    │   │
    │   └── Document Templates
    │       ├── Template Library
    │       ├── Create New Template
    │       └── Edit Template
    │
    ├── NEWS & ANNOUNCEMENTS MODULE
    │   ├── All Posts
    │   │   ├── Featured Post
    │   │   ├── Recent Posts
    │   │   ├── Category Filter
    │   │   └── Search
    │   │
    │   ├── View Post
    │   │   ├── Full Content
    │   │   ├── Related Posts
    │   │   └── Share Options
    │   │
    │   ├── Create New Post
    │   │   ├── Post Information
    │   │   ├── Content Editor
    │   │   ├── Featured Image
    │   │   ├── Category & Tags
    │   │   ├── Scheduling Options
    │   │   └── Visibility Settings
    │   │
    │   ├── Edit Post
    │   │   └── (Same as Create)
    │   │
    │   ├── Categories
    │   │   ├── View All Categories
    │   │   ├── Add Category
    │   │   └── Edit Category
    │   │
    │   └── Scheduled Posts
    │       └── Posts Schedule Calendar
    │
    ├── ADMINISTRATION MODULE
    │   ├── User Management
    │   │   ├── Users List
    │   │   │   ├── Active Users
    │   │   │   ├── Inactive Users
    │   │   │   ├── Search/Filter
    │   │   │   └── Bulk Actions
    │   │   │
    │   │   ├── Add New User
    │   │   │   ├── User Information
    │   │   │   ├── Assign Role/Group
    │   │   │   ├── Set Permissions
    │   │   │   └── Send Invitation
    │   │   │
    │   │   ├── Edit User
    │   │   │   ├── User Details
    │   │   │   ├── Change Role
    │   │   │   ├── Reset Password
    │   │   │   └── Deactivate/Activate
    │   │   │
    │   │   └── User Groups
    │   │       ├── View All Groups
    │   │       ├── Create Group
    │   │       ├── Edit Group
    │   │       └── Manage Permissions
    │   │
    │   ├── System Settings
    │   │   ├── General Settings
    │   │   │   ├── Site Information
    │   │   │   ├── Timezone & Locale
    │   │   │   └── Maintenance Mode
    │   │   │
    │   │   ├── Security Settings
    │   │   │   ├── Password Policy
    │   │   │   ├── Session Configuration
    │   │   │   └── IP Restrictions
    │   │   │
    │   │   ├── Email Settings
    │   │   │   ├── SMTP Configuration
    │   │   │   ├── Email Templates
    │   │   │   └── Test Email
    │   │   │
    │   │   ├── Notification Settings
    │   │   │   ├── Email Notifications
    │   │   │   ├── SMS Notifications (Future)
    │   │   │   └── Push Notifications
    │   │   │
    │   │   ├── Backup & Restore
    │   │   │   ├── Automatic Backups
    │   │   │   ├── Manual Backup
    │   │   │   ├── Restore from Backup
    │   │   │   └── Backup Schedule
    │   │   │
    │   │   └── Advanced Settings
    │   │       ├── Database Settings
    │   │       ├── File Upload Limits
    │   │       └── API Configuration
    │   │
    │   └── Audit Log
    │       ├── All Activities
    │       ├── Filter by User
    │       ├── Filter by Action
    │       ├── Filter by Date
    │       └── Export Log
    │
    ├── REPORTS MODULE
    │   ├── Statistics Dashboard
    │   │   ├── Key Metrics
    │   │   ├── Charts & Graphs
    │   │   ├── Trends Analysis
    │   │   └── Date Range Selector
    │   │
    │   ├── Pre-built Reports
    │   │   ├── Resident Demographics
    │   │   ├── Document Processing
    │   │   ├── User Activity
    │   │   └── System Usage
    │   │
    │   ├── Custom Reports
    │   │   ├── Report Builder
    │   │   ├── Saved Reports
    │   │   └── Scheduled Reports
    │   │
    │   └── Export Options
    │       ├── Export to PDF
    │       ├── Export to Excel
    │       └── Export to CSV
    │
    └── USER PROFILE
        ├── View Profile
        │   ├── Personal Information
        │   ├── Activity History
        │   └── Preferences
        │
        ├── Edit Profile
        │   ├── Update Information
        │   ├── Change Photo
        │   └── Update Preferences
        │
        ├── Change Password
        │   ├── Current Password
        │   ├── New Password
        │   └── Confirm Password
        │
        ├── Notifications
        │   ├── Notification Settings
        │   ├── Notification History
        │   └── Mark as Read
        │
        └── Help & Support
            ├── User Guide
            ├── FAQs
            ├── Contact Support
            └── System Information
```

---

## User Role-Based Access

### Administrator Role
- ✅ Full access to all modules
- ✅ User management
- ✅ System settings
- ✅ All reports
- ✅ Audit logs

### Staff Role
- ✅ Dashboard
- ✅ Residents (View, Add, Edit)
- ✅ Documents (View, Process, Issue)
- ✅ News (View, Create, Edit)
- ❌ User management (limited)
- ❌ System settings
- ✅ Basic reports

### Viewer Role
- ✅ Dashboard (limited)
- ✅ Residents (View only)
- ✅ Documents (View only)
- ✅ News (View only)
- ❌ User management
- ❌ System settings
- ✅ Basic reports (View only)

---

## Detailed User Flows

### Flow 1: Complete Resident Registration Process

```
START
  │
  ├─→ User logs into system
  │
  ├─→ Navigate to Dashboard
  │
  ├─→ Click "Residents" in sidebar
  │
  ├─→ Click "+ Add New Resident" button
  │
  ├─→ FORM: Personal Information Section
  │   ├─ Enter First Name (Required)
  │   ├─ Enter Middle Name (Optional)
  │   ├─ Enter Last Name (Required)
  │   ├─ Select Date of Birth (Required)
  │   ├─ Select Gender (Required)
  │   ├─ Enter National ID (Required)
  │   ├─ Enter Phone Number (Required)
  │   ├─ Enter Email (Optional)
  │   └─ Upload Photo (Required)
  │       ├─ Click upload button
  │       ├─ Select file from computer
  │       ├─ Crop/adjust photo
  │       └─ Confirm upload
  │
  ├─→ FORM: Address Information Section
  │   ├─ Enter House Number (Required)
  │   ├─ Select Woreda (Dropdown, Required)
  │   ├─ Enter Kebele (Required)
  │   ├─ Enter City/Town (Required)
  │   └─ Enter Street Address (Optional)
  │
  ├─→ FORM: Emergency Contact Section
  │   ├─ Enter Contact Name (Required)
  │   ├─ Select Relationship (Dropdown, Required)
  │   ├─ Enter Phone Number (Required)
  │   └─ Enter Email (Optional)
  │
  ├─→ FORM: Additional Information (Optional)
  │   ├─ Enter Occupation
  │   ├─ Select Education Level (Dropdown)
  │   └─ Add Notes
  │
  ├─→ Review all entered information
  │
  ├─→ VALIDATION: System checks all required fields
  │   │
  │   ├─→ [If Errors Found]
  │   │   ├─ Show error messages
  │   │   ├─ Highlight problem fields
  │   │   └─ Return to form
  │   │
  │   └─→ [If All Valid]
  │       └─ Continue
  │
  ├─→ Choose action:
  │   ├─→ [Save as Draft]
  │   │   ├─ Save to database
  │   │   ├─ Show success message
  │   │   └─ Redirect to Residents List
  │   │
  │   └─→ [Save & Register]
  │       ├─ Save to database
  │       ├─ Generate Resident ID (e.g., KEB/001/2024)
  │       ├─ Create activity log entry
  │       ├─ Show success message with ID
  │       └─ Redirect to Resident Profile Page
  │
END
```

---

### Flow 2: Document Request Processing Workflow

```
START: Staff member receives notification
  │
  ├─→ Login to system
  │
  ├─→ Dashboard shows pending requests (23 pending)
  │
  ├─→ Navigate to Documents > Pending Requests
  │
  ├─→ View list of pending requests
  │   ├─ REQ-001: Ahmed Hassan - ID Card
  │   ├─ REQ-002: Fatima Mohammed - Birth Certificate
  │   └─ REQ-003: Samuel Tadesse - Residence Letter
  │
  ├─→ Click on request REQ-001
  │
  ├─→ VIEW: Request Details Page
  │   │
  │   ├─→ SECTION: Applicant Information
  │   │   ├─ Name: Ahmed Hassan
  │   │   ├─ ID: KEB/001/2024
  │   │   ├─ Phone: +251-xxx-xxxx
  │   │   └─ Email: ahmed@example.com
  │   │
  │   ├─→ SECTION: Request Details
  │   │   ├─ Document Type: ID Card
  │   │   ├─ Request Date: Oct 25, 2025
  │   │   ├─ Priority: Normal
  │   │   └─ Fee: 50 Birr (Status: Paid/Unpaid)
  │   │
  │   ├─→ SECTION: Processing Timeline
  │   │   ├─ ✅ Submitted (Oct 25, 10:00 AM)
  │   │   ├─ ⏳ Under Review (Current)
  │   │   ├─ ⏺ Verification (Not Started)
  │   │   ├─ ⏺ Approval (Not Started)
  │   │   ├─ ⏺ Printing (Not Started)
  │   │   └─ ⏺ Ready for Pickup (Not Started)
  │   │
  │   └─→ SECTION: Attached Documents
  │       ├─ Photo.jpg (250 KB) [View] [Download]
  │       ├─ Birth_certificate.pdf (1.2 MB) [View] [Download]
  │       └─ [+ Upload Additional]
  │
  ├─→ Staff reviews documents
  │   │
  │   ├─→ Click [View] on photo.jpg
  │   │   ├─ Photo opens in lightbox
  │   │   ├─ Check quality and clarity
  │   │   └─ Close lightbox
  │   │
  │   └─→ Click [View] on birth_certificate.pdf
  │       ├─ PDF opens in new tab
  │       ├─ Verify document authenticity
  │       └─ Close tab
  │
  ├─→ DECISION POINT: Document Quality
  │   │
  │   ├─→ [OPTION A: Documents Need Improvement]
  │   │   ├─ Click "Request Changes" button
  │   │   ├─ MODAL: Request Changes
  │   │   │   ├─ Select issue type (dropdown)
  │   │   │   │   ├─ Poor photo quality
  │   │   │   │   ├─ Missing documents
  │   │   │   │   ├─ Incorrect information
  │   │   │   │   └─ Other
  │   │   │   ├─ Add detailed comment
  │   │   │   │   "Photo quality is too low. Please
  │   │   │   │    submit a clearer photo with better
  │   │   │   │    lighting."
  │   │   │   └─ Click [Send Request]
  │   │   ├─ System updates status to "Changes Requested"
  │   │   ├─ Email/SMS sent to resident
  │   │   ├─ Notification created for resident
  │   │   └─ Return to Pending Requests list
  │   │
  │   ├─→ [OPTION B: Documents Need Rejection]
  │   │   ├─ Click "Reject" button
  │   │   ├─ MODAL: Confirm Rejection
  │   │   │   ├─ Select reason (dropdown)
  │   │   │   ├─ Add explanation
  │   │   │   └─ Confirm rejection
  │   │   ├─ System updates status to "Rejected"
  │   │   ├─ Notification sent to resident
  │   │   └─ Request archived
  │   │
  │   └─→ [OPTION C: Documents Approved - Continue Processing]
  │       │
  │       ├─→ Click "Approve" button
  │       │
  │       ├─→ System moves to "Verification" stage
  │       │
  │       ├─→ VERIFICATION PROCESS
  │       │   ├─ Verify resident exists in system
  │       │   ├─ Check for duplicate requests
  │       │   ├─ Verify payment status
  │       │   └─ Cross-reference with national database
  │       │
  │       ├─→ [If Verification Fails]
  │       │   ├─ Add note about issue
  │       │   ├─ Request additional information
  │       │   └─ Hold request pending resolution
  │       │
  │       └─→ [If Verification Passes]
  │           │
  │           ├─→ Click "Move to Approval"
  │           │
  │           ├─→ APPROVAL STAGE
  │           │   ├─ Senior staff/Manager reviews
  │           │   ├─ Final authorization
  │           │   └─ Digital signature (if applicable)
  │           │
  │           ├─→ System updates to "Approved"
  │           │
  │           ├─→ PRINTING STAGE
  │           │   ├─ Click "Generate Document"
  │           │   ├─ System fills template with data
  │           │   ├─ Preview generated document
  │           │   ├─ Click "Send to Printer"
  │           │   ├─ Print physical document
  │           │   └─ Mark as "Printed"
  │           │
  │           ├─→ QUALITY CHECK
  │           │   ├─ Verify print quality
  │           │   ├─ Check all information is correct
  │           │   ├─ Add any security features
  │           │   │   ├─ Hologram sticker
  │           │   │   ├─ Official stamp
  │           │   │   └─ Signature
  │           │   └─ Mark as complete
  │           │
  │           ├─→ UPDATE STATUS: "Ready for Pickup"
  │           │   ├─ Click "Mark Ready for Pickup"
  │           │   ├─ Enter pickup location
  │           │   ├─ Set pickup instructions
  │           │   └─ Confirm
  │           │
  │           ├─→ NOTIFICATIONS SENT
  │           │   ├─ Email to resident
  │           │   │   "Your ID Card is ready for pickup"
  │           │   ├─ SMS notification (if enabled)
  │           │   └─ In-app notification
  │           │
  │           └─→ SUCCESS MESSAGE DISPLAYED
  │               "Document processed successfully.
  │                Resident notified for pickup."
  │
END: Request completed
```

---

### Flow 3: Creating and Publishing News Announcement

```
START
  │
  ├─→ User (Admin/Staff) logs in
  │
  ├─→ Navigate to News > Create New Post
  │
  ├─→ CREATE POST FORM
  │   │
  │   ├─→ STEP 1: Basic Information
  │   │   ├─ Enter Post Title
  │   │   │   "Community Meeting Scheduled for November"
  │   │   │
  │   │   ├─ Select Category (Dropdown)
  │   │   │   ├─ Announcement
  │   │   │   ├─ Event
  │   │   │   ├─ Update
  │   │   │   └─ Emergency
  │   │   │
  │   │   └─ Select Priority
  │   │       ( ) Normal
  │   │       (•) High
  │   │       ( ) Urgent
  │   │
  │   ├─→ STEP 2: Featured Image
  │   │   ├─ Click "Upload Image" or "Choose from Library"
  │   │   │
  │   │   ├─→ [If Upload New]
  │   │   │   ├─ Select image file
  │   │   │   ├─ Preview image
  │   │   │   ├─ Crop/resize if needed
  │   │   │   └─ Confirm upload
  │   │   │
  │   │   └─→ [If Choose from Library]
  │   │       ├─ Browse existing images
  │   │       ├─ Select image
  │   │       └─ Insert
  │   │
  │   ├─→ STEP 3: Content Creation
  │   │   ├─ RICH TEXT EDITOR
  │   │   │   ├─ Toolbar options:
  │   │   │   │   [B] [I] [U] [List] [Link] [Image]
  │   │   │   │   [Table] [Quote] [Align] [Format]
  │   │   │   │
  │   │   │   ├─ Type/paste content:
  │   │   │   │   "We are pleased to announce a community
  │   │   │   │    meeting scheduled for November 15, 2025.
  │   │   │   │    
  │   │   │   │    Topics to be discussed:
  │   │   │   │    - New infrastructure projects
  │   │   │   │    - Security improvements
  │   │   │   │    - Community feedback session
  │   │   │   │    
  │   │   │   │    Date: November 15, 2025
  │   │   │   │    Time: 10:00 AM - 12:00 PM
  │   │   │   │    Location: Community Hall
  │   │   │   │    
  │   │   │   │    All residents are encouraged to attend."
  │   │   │   │
  │   │   │   ├─ Format text (bold, italic, lists)
  │   │   │   ├─ Add inline images if needed
  │   │   │   └─ Add links if applicable
  │   │   │
  │   │   └─ Auto-save draft every 2 minutes
  │   │
  │   ├─→ STEP 4: Tags & Metadata
  │   │   ├─ Add tags
  │   │   │   [Community] [Meeting] [Important]
  │   │   │   Type to add: [____________] [+]
  │   │   │
  │   │   └─ SEO Metadata (Optional)
  │   │       ├─ Meta description
  │   │       └─ Keywords
  │   │
  │   ├─→ STEP 5: Publishing Options
  │   │   │
  │   │   ├─ SCHEDULING
  │   │   │   ├─ (•) Publish immediately
  │   │   │   └─ ( ) Schedule for later
  │   │   │       └─ [Date/Time Picker]
  │   │   │
  │   │   ├─ VISIBILITY
  │   │   │   ├─ (•) Public (Everyone can see)
  │   │   │   ├─ ( ) Registered Users Only
  │   │   │   └─ ( ) Staff Only
  │   │   │
  │   │   └─ NOTIFICATIONS
  │   │       ├─ [✓] Send email notification
  │   │       ├─ [✓] Show as pop-up notification
  │   │       └─ [ ] Pin to top of news feed
  │   │
  │   └─→ STEP 6: Review & Actions
  │       │
  │       ├─→ [Preview Button]
  │       │   ├─ Opens preview in modal/new tab
  │       │   ├─ Shows how post will look
  │       │   └─ Close preview
  │       │
  │       ├─→ [Save as Draft Button]
  │       │   ├─ Saves without publishing
  │       │   ├─ Can continue editing later
  │       │   └─ Returns to News list
  │       │
  │       ├─→ [Cancel Button]
  │       │   ├─ Confirm discard changes
  │       │   └─ Return to News list
  │       │
  │       └─→ [Publish Button]
  │           │
  │           ├─→ VALIDATION
  │           │   ├─ Check title is filled
  │           │   ├─ Check content exists
  │           │   ├─ Check featured image present
  │           │   └─ Validate all required fields
  │           │
  │           ├─→ [If Validation Fails]
  │           │   ├─ Show error messages
  │           │   └─ Return to form
  │           │
  │           └─→ [If Validation Passes]
  │               │
  │               ├─→ CONFIRMATION MODAL
  │               │   "Publish this post now?"
  │               │   [Cancel] [Confirm]
  │               │
  │               ├─→ Click [Confirm]
  │               │
  │               ├─→ PUBLISHING PROCESS
  │               │   ├─ Save to database
  │               │   ├─ Generate post URL/slug
  │               │   ├─ Update timestamp
  │               │   ├─ Set status to "Published"
  │               │   └─ Create activity log
  │               │
  │               ├─→ SEND NOTIFICATIONS (if enabled)
  │               │   ├─ Queue email notifications
  │               │   │   ├─ Fetch subscriber list
  │               │   │   ├─ Generate email content
  │               │   │   └─ Send via email service
  │               │   │
  │               │   ├─ Create in-app notifications
  │               │   │   ├─ For all registered users
  │               │   │   └─ Show notification badge
  │               │   │
  │               │   └─ Show pop-up (if enabled)
  │               │       └─ On next user login
  │               │
  │               ├─→ SUCCESS MESSAGE
  │               │   "Post published successfully!"
  │               │   [View Post] [Create Another]
  │               │
  │               └─→ OPTIONS
  │                   ├─→ [View Post]
  │                   │   └─ Redirect to public post view
  │                   │
  │                   ├─→ [Create Another]
  │                   │   └─ Return to blank create form
  │                   │
  │                   └─→ [Back to News]
  │                       └─ Return to news list
  │
END
```

---

## Navigation Patterns

### Breadcrumb Navigation Pattern

```
Example 1: Resident Profile
Home > Residents > Ahmed Hassan

Example 2: Edit Document Request
Home > Documents > All Requests > REQ-001 > Edit

Example 3: Create News Post
Home > News > Create New Post

Example 4: User Settings
Home > Administration > User Management > Users > John Doe > Edit

Example 5: Reports
Home > Reports > Custom Reports > Demographics Report
```

### Sidebar Navigation States

```
COLLAPSED STATE (Mobile/Small Screens)
┌───┐
│ ☰ │
│   │
│ 🏠│
│ 👥│
│ 📄│
│ 📰│
│ 👨‍💼│
│ 📊│
└───┘

EXPANDED STATE (Desktop)
┌─────────────────┐
│ E-Kebele        │
├─────────────────┤
│ 🏠 Dashboard    │
│ 👥 Residents  > │
│ 📄 Documents  > │
│ 📰 News       > │
│ 👨‍💼 Admin     > │
│ 📊 Reports    > │
└─────────────────┘

WITH SUBMENU (Hover/Click)
┌─────────────────────────┐
│ 🏠 Dashboard            │
│ 👥 Residents          > │
│   ├─ View All          │
│   ├─ Add New           │
│   ├─ Search            │
│   └─ Reports           │
│ 📄 Documents          > │
│ 📰 News               > │
│ 👨‍💼 Admin             > │
│ 📊 Reports            > │
└─────────────────────────┘
```

---

## Modal/Dialog Patterns

### Confirmation Dialog
```
┌─────────────────────────────────┐
│  ⚠️  Confirm Action              │
├─────────────────────────────────┤
│                                 │
│  Are you sure you want to       │
│  delete this resident?          │
│                                 │
│  This action cannot be undone.  │
│                                 │
│         [Cancel]  [Delete]      │
└─────────────────────────────────┘
```

### Success Notification
```
┌─────────────────────────────────┐
│  ✅ Success!               [×]  │
├─────────────────────────────────┤
│  Resident registered            │
│  successfully.                  │
│                                 │
│  ID: KEB/001/2024               │
└─────────────────────────────────┘
```

### Error Notification
```
┌─────────────────────────────────┐
│  ❌ Error                   [×]  │
├─────────────────────────────────┤
│  Failed to save resident.       │
│                                 │
│  Error: Phone number already    │
│  exists in system.              │
└─────────────────────────────────┘
```

---

## Search and Filter Patterns

### Global Search (Header)
```
User types: "Ahmed"

┌─────────────────────────────────────┐
│ 🔍 Ahmed                            │
├─────────────────────────────────────┤
│ RESIDENTS (3)                       │
│  👤 Ahmed Hassan (KEB/001/2024)    │
│  👤 Ahmed Ali (KEB/045/2024)       │
│  👤 Ahmed Mohammed (KEB/089/2024)  │
│                                     │
│ DOCUMENTS (1)                       │
│  📄 Ahmed Hassan - ID Card Request │
│                                     │
│ NEWS (0)                            │
│  No results found                  │
│                                     │
│ [View All Results →]                │
└─────────────────────────────────────┘
```

### Advanced Filter Panel
```
┌─────────────────────────────────┐
│ Filter Residents            [×] │
├─────────────────────────────────┤
│                                 │
│ Gender                          │
│ [ ] All                         │
│ [✓] Male                        │
│ [✓] Female                      │
│                                 │
│ Age Range                       │
│ [18] to [65]                    │
│                                 │
│ Registration Date               │
│ From: [________]                │
│ To:   [________]                │
│                                 │
│ Status                          │
│ [✓] Active                      │
│ [ ] Inactive                    │
│                                 │
│ Kebele                          │
│ [Dropdown ▼]                    │
│                                 │
│     [Clear]  [Apply Filters]    │
└─────────────────────────────────┘
```

---

## Responsive Behavior

### Desktop Layout (≥992px)
```
┌─────────────────────────────────────────────────────┐
│ Header (Full)                                       │
├───────────┬─────────────────────────────────────────┤
│           │                                         │
│  Sidebar  │         Main Content                    │
│  (Fixed)  │         (Scrollable)                    │
│           │                                         │
│           │                                         │
└───────────┴─────────────────────────────────────────┘
```

### Tablet Layout (576-991px)
```
┌─────────────────────────────────────────────────────┐
│ Header (Collapsed sidebar icon)                     │
├─────────────────────────────────────────────────────┤
│                                                     │
│         Main Content (Full Width)                   │
│                                                     │
│    [Sidebar slides in from left when triggered]    │
│                                                     │
└─────────────────────────────────────────────────────┘
```

### Mobile Layout (<576px)
```
┌─────────────────────┐
│ [☰] App  [🔔] [👤] │
├─────────────────────┤
│                     │
│   Main Content      │
│   (Full Width)      │
│   (Stack Vertical)  │
│                     │
│                     │
└─────────────────────┘
```

---

## Loading States

### Page Loading
```
┌─────────────────────────────────┐
│                                 │
│         ⌛ Loading...           │
│                                 │
│     [Spinner Animation]         │
│                                 │
│  Please wait while we load      │
│  your data...                   │
│                                 │
└─────────────────────────────────┘
```

### Inline Loading (Button)
```
Before: [Save Changes]
During: [⌛ Saving...]
After:  [✓ Saved!]
```

### Table Loading (Skeleton)
```
┌──────────────────────────────────┐
│ ▓▓▓▓▓▓  ▓▓▓▓▓▓▓▓▓  ▓▓▓  ▓▓▓▓▓ │
│ ▓▓▓▓▓▓  ▓▓▓▓▓▓▓▓▓  ▓▓▓  ▓▓▓▓▓ │
│ ▓▓▓▓▓▓  ▓▓▓▓▓▓▓▓▓  ▓▓▓  ▓▓▓▓▓ │
│ ▓▓▓▓▓▓  ▓▓▓▓▓▓▓▓▓  ▓▓▓  ▓▓▓▓▓ │
└──────────────────────────────────┘
(Gray pulsing rectangles)
```

---

## Empty States

### No Residents Found
```
┌─────────────────────────────────┐
│                                 │
│          📋                     │
│                                 │
│    No residents found           │
│                                 │
│    Get started by adding your   │
│    first resident.              │
│                                 │
│    [+ Add New Resident]         │
│                                 │
└─────────────────────────────────┘
```

### No Search Results
```
┌─────────────────────────────────┐
│                                 │
│          🔍                     │
│                                 │
│    No results found for         │
│    "Ahmed XYZ"                  │
│                                 │
│    Try:                         │
│    • Different keywords         │
│    • Check spelling             │
│    • Use fewer words            │
│                                 │
│    [Clear Search]               │
│                                 │
└─────────────────────────────────┘
```

---

## Conclusion

This document provides comprehensive site mapping and detailed user flows for the E-Kebele web application. It covers:

1. **Complete site structure** with all modules and sub-pages
2. **Role-based access patterns** for different user types
3. **Detailed step-by-step user flows** for key processes
4. **Navigation patterns** including breadcrumbs and sidebars
5. **UI patterns** for modals, notifications, and loading states
6. **Responsive behavior** across different devices
7. **Empty and error states** for better user experience

These flows should be used alongside the main wireframe document to guide implementation and ensure a consistent, intuitive user experience.

---

**Document End**
