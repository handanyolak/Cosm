<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = ['HYALURONİK ASİT NEDİR?', 'ANTİOKSİDANLAR', 'GLİKOLİK ASİT NEDİR?'];
        $excerpt = ['Hyalüronik Asit, son yıllarda kozmetik sektöründe en sık duyduğumuz içeriklerden biri. Hem edipermisde (cildin yüzeye yakın katmanında) hem de dermiste (daha alt katmanında) doğal olarak bulunan, temel yapı taşlarından olan bir molekül. ',
                    'Antioksidanlar aslında çok yaygın olarak bilindiği gibi "serbest radikal hasarından korurlar." İyi de ne demek bu?',
                    'Glikolik asit, peeling ürünlerinde en çok kullanılan bileşenlerden biridir ve güzellik editörleri, blog yazarları, ünlüler ve dermatologlar tarafından çok sevilir. Hangi cilt tipine sahip olursanız olun rutininize eklemeniz gerekir. Sebeplerini anlamak ve faydalarını keşfetmek için lütfen yazımızın devamını inceleyin.'];
        $body = ['HA, vücudumuzda en çok ciltte, sonrasında çeşitli organlarda, kıkırdaklarımızda ve kanımızda bulunan bir moleküldür. HA içeren ürünler, vücudumuzda hali hazırda bulunan bu molekülü farklı doğal kaynaklardan temin ederek dışarıdan destek sağlamak amaçlıdır. HA’nın yaşam döngüsü kanda 3-5 dk, ciltte yarım gün, kıkırdakta 1-3 hafta arasıdır. Cildimizdeki (dermiş) temel yapı taşlarından olan HA azaldığında solgun ve kırışık görünüm de artar. Bunu takviye ettiğimizde ise daha doygun bir görüntüye kavuşabiliriz. Nem tutma özelliğine sayesinde ince kırışıklıkların görünümünü kullanıldığı süre boyunca azaltıcı etkisi bulunuyor. Hyalüronik asit hidroskopik yapısı sayesinde etrafındaki suyu çeperine çeker ve bulunduğu yeri nemlendirmeye yardımcı olur. 1 gram HA molekülü 6 litre- yaklaşık olarak boyutunun 1000 katı su tutma kapasitesine sahiptir. Bu özelliği nedeniyle bilinen en iyi humektan (nem tutucu) maddelerden biridir. Bu sayede etrafından suyu çekip içinde bir nem tutmaya başlıyor. Ve daha doygun, yani şiştiğini düşünün bir balonun, bulunduğu yeri ittirdiği için daha doygun daha parlak bir görünüm sağlanmasına yardımcı oluyor.',
                'Vücudumuz besinleri sindirirken, çevresel faktörlere maruz kalırken tepki olarak dengesiz moleküller üretiyor. Bu dengesiz moleküllere serbest radikaller deniliyor. Çünkü gerçekten serbestler. Büyük ölçüde kontrol edilemiyorlar. Bu serbest radikaller eğer kontrol edilemezse vücudumuzdaki, cildimizdeki sağlıklı hücrelere zarar veriyorlar. Cildin daha canlı ve dolgun görünmesini sağlayan kollajen üretimine, seramidlere, koruyucu faktörlere, ve daha birçok gerek duyduğu hücreye zarar vererek, daha soluk, mat, nemsiz ve lekelenmeye müsait bir cilt görünümüne sebep oluyorlar. Vücudumuz bu agrasif serbest radikallerle başa çıkabilecek hücreler üretiyor. (mesela Q10) Ancak biz yaş aldıkça bu hücrelerin üretimi yavaşlıyor. Ayrıca serbest radikal üretimini tetikleyecek ne kadar çok faktöre maruz kalırsak o kadar başa çıkılamaz hale geliyor. Enflamasyon kaynaklı akne, deride kaşıntı, kızarıklık ve döküntü (dermatit) egzama, rozasea, seboreik dermatit, sedef, kollajen üretimini yavaşlattığı için daha donuk, cansız görünüm, fotoyaşlanma, kolay lekelenme, kırışıklık gibi birçok cilt problemine sebep oluyorlar. Ayrıca siz cildinizi onarmaya, bariyerinizi güçlendirmeye çalışıyorsanız, serbest radikaller onarımı da engelliyor. Antioksidanlar temel olarak yoğun serbest radikalleri nötralize etmeye, hücrelere saldırıyı azaltmaya ve önlemeye çalışır. Böylece ciltte sorun oluşumunu engellemekle birlikte, eğer cildinizde bir sorun varsa onarılmasını hızlandırır. Antioksidanlar güneş koruyucu ile birlikte kullanıldığında UV hasarına karşı koruyuculuğu artırır. Serbest radikaller doğası gereği enflamasyon oluşturur. Bazi antioksidanlar iltihabı azaltmaya ve cildi yatıştırmaya yardımcı olur. Zamanla cilt bariyerindeki gerekli maddeler tükenir ve ciltteki sıkılığın azalmasına sebep olur. Antioksidanlar bu tür bozulmaları yavaşlatabilirler. Daha sıkı ve net bir cilt sağlarlar. Bazı antioksidanlar donuk, düzensiz cilt tonunun görünümünü iyileştirmek ve daha sağlıklı bir cilt sunmak için mükemmel yeteneklere sahiptir. Birçok araştırma antioksidanların kırışıklıkların görünümünü azaltmaya ve gözle görülür şekilde yumuşatmaya yardımcı olduğunu gösteriyor. Serbest radikaller güneşe maruz kalmayla birlikte melanin üretimini tetikler ve pigmen- tasyona, düzensiz cilt tonuna lekelenmeye davetiye çıkartır. Antioksidanlar serbet radikalleri etkisiz hale getirip pigmentas- yonu önlemeye yardımcı olur. Bazı antikanserojen etkilere sahip olan antioksidanlar cilt kanserini önlemeye yardımcı olurlar.',
                 'Glikolik asit nedir? Glikolik asit, başka bir adıyla alfa-hidroksi asit olarak bilinen bir AHA formudur. Bitki şekerlerinden türetilmiş, aynı zamanda yaygın olarak "meyve asidi" olarak da adlandırılır ve sağlıklı bir cilt elde etmek için kullanabileceğiniz en etkili kimyasal eksfoliyan maddelerinden biridir. Oldukça küçük molekül yapısı sayesinde cildin üst katmanlarına diğer AHA asitlerinden daha iyi nüfuz edebilir. Mat cilt için gözle görülür şekilde yenilenmiş ve taze bir görünüm vermek için oluşturulan en iyi asitlerden biridir. Glikolik nasıl çalışır? BHA’lardan (beta-hidroksi asitler) farklı olarak, AHA’lar; kir, yağ, yabancı madde ve ölü hücreleri çözmek için cilt hücrelerinin üst katmanları üzerinde çalışır. Karma bir cildiniz varsa, glikolik asit fiziksel bir eksfoliyan için mükemmel bir alternatif olabilir. Aşındırıcı olmayan dokusu, aşırı sert bir ovalamaya gerek kalmadan cildi nazikçe yeniden yüzeye çıkarır. Faydaları nelerdir? Özellikle olgun, güneşten zarar görmüş, leke eğilimli veya yağlı bir cildiniz varsa, glikolik asit harikalar yaratır, ayrıca tüm cilt tipleri için kullanımı uygundur. Ölü hücreleri ve cildin yüzeyindeki saflığı bozan noktaları çözme konusundaki inanılmaz kabiliyeti sayesinde, hücre yenilenmesini arttırmaya yardımcı olur; böylece cilt daha parlak, daha taze ve daha aydınlık görünür.  Yüzey kirini ortadan kaldırır ve diğer tüm ürünlerin cilde daha iyi ve daha kolay emilimini destekler. Doğrusu, bu bakım sayesinde rutin cilt bakımınızdan daha fazlasını elde edebilirsiniz.'];
        $photo = ['blog1.jpg', 'blog2.jpg', 'blog3.jpg'];

        for($i=1; $i<=count($title); $i++){
            Blog::insert([
                'title' => $title[$i-1],
                'excerpt' => $excerpt[$i-1],
                'body' => $body[$i-1],
                'photo' => $photo[$i-1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
