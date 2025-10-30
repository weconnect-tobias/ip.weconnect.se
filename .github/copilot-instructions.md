# Copilot Instructions for ip.weconnect.se

This document provides essential context for AI agents working with the ip.weconnect.se codebase.

## Project Overview

The project is a PHP-based web application that displays a user's public IP address (IPv4/IPv6) with additional educational content. Key features:
- Real-time IP address detection and display
- Copy-to-clipboard functionality
- Responsive design with dark mode support
- Accessibility-focused UI

## Architecture

### Core Components

1. **IP Detection (`ip.php`)**
   - Handles secure IP address detection with validation
   - Filters private/reserved ranges
   - Normalizes IP notation for both IPv4 and IPv6

2. **Frontend Structure**
   - Single page application pattern
   - Progressive enhancement with JavaScript
   - Mobile-first responsive design

3. **Security Layer**
   - CSP (Content-Security-Policy) implementation
   - Strict HSTS headers
   - XSS protection measures

### Key Files

```
index.php           # Main entry point
ip.php             # IP detection logic
js/
  copy-ip.js       # Clipboard functionality
  dropdown.js      # Navigation behavior
  email-protect.js # Email obfuscation
css/
  weconnect2024.css # Current styles
  weconnect2025.css # Future styles
```

## Development Patterns

### Security Practices
- All user inputs are validated and sanitized
- IP addresses are normalized before display
- CSP nonces for inline scripts
- Strict security headers in `.htaccess`

### JavaScript Conventions
- Use IIFE pattern for scoping
- Event delegation for dynamic elements
- Performance optimization with `requestAnimationFrame`
- Accessible ARIA attributes for UI components

### CSS Structure
- Mobile-first media queries
- Dark mode support via `prefers-color-scheme`
- CSS custom properties for theming
- BEM-like naming convention

## Common Tasks

### Adding New Features
1. Update PHP logic in `ip.php` if needed
2. Add corresponding UI elements to `index.php`
3. Implement JavaScript enhancements in `/js`
4. Style with responsive/dark mode in mind

### Performance Optimization
- Minimize DOM operations (use `requestAnimationFrame`)
- Leverage browser caching via `.htaccess`
- Optimize image assets with WebP format
- Use `preload` for critical resources

### Accessibility
- Maintain ARIA labels and roles
- Ensure keyboard navigation works
- Test with screen readers
- Follow WCAG 2.1 guidelines

## Testing

Test changes across:
- Multiple browsers (Chrome, Firefox, Safari)
- Both light and dark modes
- Different screen sizes
- With JavaScript disabled
- Various IP configurations (IPv4/IPv6)

## Build Process
- No compilation required (direct PHP/JS/CSS)
- Assets are served with appropriate cache headers
- WebP images with PNG fallbacks
- CSP nonces generated per request

## Additional Notes
- Site is bilingual (Swedish primary)
- Strong focus on privacy (no tracking/cookies)
- Performance budget: < 100KB for initial load
- Supports both modern and legacy browsers