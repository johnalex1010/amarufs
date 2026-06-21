import { SiteFooter } from "@/components/layout/SiteFooter";
import { SiteHeader } from "@/components/layout/SiteHeader";
import { BlogFaqSection } from "./BlogFaqSection";
import { FeaturedPropertiesSection } from "./FeaturedPropertiesSection";
import { FinalCtaSection } from "./FinalCtaSection";
import { HeroSection } from "./HeroSection";
import { ProcessSection } from "./ProcessSection";
import { PublishCtaSection } from "./PublishCtaSection";
import { ResultsBand } from "./ResultsBand";
import { ServicesSection } from "./ServicesSection";
import { TestimonialsReferralSection } from "./TestimonialsReferralSection";
import { TrustSection } from "./TrustSection";

export function LandingPage() {
  return (
    <>
      <SiteHeader />
      <main>
        <HeroSection />
        <TrustSection />
        <FeaturedPropertiesSection />
        <ServicesSection />
        <ProcessSection />
        <PublishCtaSection />
        <ResultsBand />
        <TestimonialsReferralSection />
        <BlogFaqSection />
        <FinalCtaSection />
      </main>
      <SiteFooter />
    </>
  );
}
