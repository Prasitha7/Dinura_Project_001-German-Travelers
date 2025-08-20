# TULA REISEN - Sri Lanka Travel Website

A modern, responsive website for **TULA REISEN**, a travel agency specializing in custom Sri Lanka tours for German-speaking travelers. The website features a beautiful 3D hero section, interactive elements, and seamless WhatsApp integration for customer inquiries.

## 🌟 Features

- **Responsive Design**: Mobile-first approach with Bootstrap 5
- **3D Hero Section**: Interactive Three.js background with Sri Lanka 3D model
- **Multi-language Support**: German and English language options
- **WhatsApp Integration**: Direct booking and inquiry system
- **Custom Tour Packages**: Nature, culture, beach, tea country, family, and honeymoon tours
- **Interactive Gallery**: Showcasing Sri Lankan destinations
- **FAQ Section**: Accordion-style frequently asked questions
- **Modern UI/UX**: Custom buttons, smooth animations, and glass-morphism effects

## 🚀 Quick Start

### Prerequisites

- **PHP 7.0+** (required for includes)
- **Web Server** (Apache, Nginx, or PHP built-in server)
- **Modern Web Browser** (Chrome, Firefox, Safari, Edge)

### Installation

1. **Clone or download the project**
   ```bash
   git clone [repository-url]
   cd Dinura_Project_001-German-Travelers
   ```

2. **Choose your setup method:**

#### Method 1: XAMPP/WAMP/MAMP (Recommended)
1. Install [XAMPP](https://www.apachefriends.org/)
2. Copy project folder to `htdocs` directory:
   - Windows: `C:\xampp\htdocs\`
   - Mac: `/Applications/XAMPP/htdocs/`
   - Linux: `/opt/lampp/htdocs/`
3. Start Apache from XAMPP control panel
4. Visit: `http://localhost/Dinura_Project_001-German-Travelers/pages/home/index.php`

#### Method 2: PHP Built-in Server
```bash
cd Dinura_Project_001-German-Travelers
php -S localhost:8000
```
Visit: `http://localhost:8000/pages/home/index.php`

## 📁 Project Structure

```
Dinura_Project_001-German-Travelers/
├── assets/
│   ├── images/           # Website images and photos
│   └── models/          # 3D models (beauty_of_srilanka.glb)
├── includes/
│   ├── header.php       # HTML head section
│   ├── navbar.php       # Navigation bar
│   └── footer.php       # Footer with scripts
├── js/
│   ├── 3d-hero.js       # Three.js 3D background
│   └── main.js          # Main JavaScript functionality
├── pages/
│   └── home/
│       ├── index.php    # Main homepage
│       └── styles.css   # Page-specific styles
├── styles.css           # Global styles
├── text.html           # Button styling reference
└── README.md           # Project documentation
```

## 🎨 Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP
- **Frameworks**: Bootstrap 5.3.7
- **3D Graphics**: Three.js (r128)
- **Icons**: Bootstrap Icons 1.11.3
- **Fonts**: Avenir Next LT W01 Bold

## 🔧 Configuration

### WhatsApp Integration
Update the phone number in all WhatsApp links:
- Current: `94700000000` (placeholder)
- Replace with your actual WhatsApp business number

### Contact Information
Update contact details in `includes/footer.php`:
```php
<p class="small mb-1"><i class="bi bi-envelope me-2"></i>your-email@domain.com</p>
<p class="small"><i class="bi bi-telephone me-2"></i>+94 XX XXX XXXX</p>
```

### Images
Add missing images to complete the gallery:
- `assets/images/gallery/1.jpg` to `8.jpg`
- `assets/images/offers/nature.jpg`
- `assets/images/offers/culture.jpg`
- `assets/images/offers/beach.jpg`
- `assets/images/offers/tea.jpg`
- `assets/images/offers/family.jpg`
- `assets/images/offers/honeymoon.jpg`

## 🌐 Pages & Sections

### Homepage (`/pages/home/index.php`)
- **Hero Section**: 3D interactive background with call-to-action
- **Why Travel With Us**: Feature highlights
- **Tour Packages**: Six different tour categories
- **Gallery**: Photo showcase of Sri Lanka
- **FAQ**: Common questions and answers
- **Contact**: WhatsApp integration and contact forms

### Navigation Sections
- Home
- About Us (placeholder - to be completed)
- Contact Us (placeholder - to be completed)
- Language switcher (English/German)

## 🎯 Customization

### Adding New Tour Packages
1. Add new card in the offers section of `index.php`
2. Include corresponding image in `assets/images/offers/`
3. Update WhatsApp link with package-specific message

### Styling Customization
- **Global styles**: Edit `styles.css`
- **Page-specific**: Edit `pages/home/styles.css`
- **Button styles**: Reference `text.html` for button variations

### 3D Model Replacement
Replace `assets/models/beauty_of_srilanka.glb` with your own GLB/GLTF model and update the path in `js/3d-hero.js`.

## 📱 Responsive Breakpoints

- **Mobile**: < 768px
- **Tablet**: 768px - 991px
- **Desktop**: 992px - 1199px
- **Large Desktop**: ≥ 1200px

## 🔍 SEO Features

- Meta descriptions and keywords
- Semantic HTML structure
- Alt tags for images
- Open Graph meta tags ready
- Fast loading with CDN resources

## 🚧 Development Notes

### Incomplete Sections
- About Us page content
- Contact Us form
- Additional language translations
- Gallery images
- Tour package images

### Future Enhancements
- Backend form processing
- Database integration
- Multi-language content management
- Blog/news section
- Customer testimonials
- Online booking system

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Open a Pull Request

## 📞 Support

For support and inquiries:
- **Email**: info@tulareisen.com
- **WhatsApp**: +94 70 000 0000
- **Location**: Colombo, Sri Lanka

## 🏗️ Built With Love

Created for TULA REISEN - Authentic, tailor-made Sri Lanka journeys for German-speaking travelers.

---

**Note**: This is a template project. Update contact information, images, and content according to your specific business needs.