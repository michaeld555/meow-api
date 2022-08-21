<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('titles')->delete();
        
        DB::table('titles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Vice Versa',
                'description' => 'Talay acorda no corpo de um homem chamado Tess e reencontra Puen, um ator famoso que agora está no corpo de Tun após um acidente. Os dois têm Phuwadol, uma enfermeira que ajuda pessoas do mesmo universo que deixaram para trás, para guiá-las pela vida neste novo universo. De acordo com Phuwadol, há uma chance de que eles possam ser a “chave do portal” um do outro, pessoas que podem ajudá-los a retornar de onde vieram depois de concluir o que precisam conquistar.',
                'creation_year' => 2022,
                'type_title' => 1,
                'url_image' => 'https://i.pinimg.com/564x/7a/12/c2/7a12c232a7073f751af46bc1f2f3132b.jpg',
                'url_image2' => 'https://image.tmdb.org/t/p/original/axQyPHaG0vYL8FPGUG75jx6aKVt.jpg',
                'url_image3' => 'https://i.mydramalist.com/pmroB_3m.jpg',
                'created_at' => '2022-08-21 11:40:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fish Upon the Sky',
                'description' => 'Pi tem uma quedinha por um dos estudantes mais gatos do Departamento de Ciências da Saúde Aliado, mas como ele não é confiante o suficiente sobre sua aparência, ele está desamparado. Pelo menos até que Duen e seus amigos o ajudem a conseguir uma mudança de visual para aumentar sua confiança. Quando Pi finalmente tem coragem de se aproximar de seu crush, ele encontra seu rival amoroso, Mork.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://pictures.betaseries.com/fonds/poster/a48d15f101af2b15d2e9b56c192b035b.jpg',
                'url_image2' => 'https://image.tmdb.org/t/p/w780/nDrGAv0No8oAN9o63UoTd40hd81.jpg',
                'url_image3' => 'https://i.mydramalist.com/wDLn1_3f.jpg',
                'created_at' => '2022-08-21 11:41:09',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'I Told Sunset About You',
                'description' => 'A história de dois garotos do ensino médio que estavam entendendo seu profundo relacionamento através de sentimentos complicados e instáveis, como uma tempestade que afasta o barco de seu caminho. Era contrário à pacífica Phuket onde eles moravam.',
                'creation_year' => 2020,
                'type_title' => 1,
                'url_image' => 'https://1.bp.blogspot.com/-4-8SzMKI9AI/X7xeMiaKysI/AAAAAAAAEE4/67M81i3HWBgh3C5Mvn14wZ0loIxLIZ-0wCLcBGAsYHQ/s1187/D93Mtrk.png',
                'url_image2' => 'https://i0.wp.com/coreanasdetaubate.com/wp-content/uploads/2021/01/6960a-i-told-sunset-about-you-2.jpg?resize=1280%2C720&ssl=1',
                'url_image3' => 'https://i.mydramalist.com/dkO7d_3m.jpg',
                'created_at' => '2022-08-21 11:47:56',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'I Promissed You the Moon',
                'description' => 'Na Parte Dois, Teh e Oh-aew levam seu relacionamento a um novo nível em Bangkok. Eles podem manter a promessa de que seu coração permanecerá o mesmo, inalterado?',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://pbs.twimg.com/media/EzT9KJ4VkAAjYOL?format=jpg&name=900x900',
                'url_image2' => 'https://sucodemanga.com.br/wp-content/uploads/2021/04/I-Promised-You-The-Moon-thumb.jpg',
                'url_image3' => 'https://i.mydramalist.com/pZkN8_3f.jpg',
                'created_at' => '2022-08-21 11:48:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'A Tale of Thousand Stars',
                'description' => 'Uma professora voluntária morre em um trágico acidente, e seu coração é transplantado para Tian. Através de uma série de anotações no diário da garota, Tian aprende sobre sua vida, seus segredos e interesses, incluindo sua promessa ao oficial Phupha, sobre contar mil estrelas. Tian decide então seguir seus passos e completar seu sonho.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://1.bp.blogspot.com/-LqxBa4BsBbI/YKewT1RIdQI/AAAAAAAADU8/YCVb0torC8k6gVowLOFCm7rMiAawdm3-ACLcBGAsYHQ/w518-h640/a%2Btale%2Bof%2B1000%2Bstarts%2Bdrama%2Btailand%25C3%25AAs%2Blegendado.jpg',
                'url_image2' => 'https://pbs.twimg.com/media/EZEIuTGUYAE42Im.jpg',
                'url_image3' => 'https://observatoriodoaudiovisual.com.br/wp-content/uploads/2021/06/Tian-Sopasitsakun-1200x900-1-740x617.jpg',
                'created_at' => '2022-08-21 11:51:24',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Until We Meet Again',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2019,
                'type_title' => 1,
                'url_image' => 'https://i.mydramalist.com/WBDBPf.jpg',
                'url_image2' => 'https://6.vikiplatform.com/image/04111c732a8845a5a42b4c7ca680ef92/dummy.jpg?x=b&a=0x0',
                'url_image3' => 'https://1.bp.blogspot.com/-CJuqJHYJ284/XlyGonbBDYI/AAAAAAAAnGc/SoyjMAz-I14LmvNwN8KYl4_o0DJhgXegwCEwYBhgL/s1600/until5.jpg',
                'created_at' => '2022-08-21 11:51:59',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Bad Buddy',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://i.mydramalist.com/kZdb8_4f.jpg',
                'url_image2' => 'https://image.tmdb.org/t/p/original/87U6PcPJlbOitrJs0uf0i6PyVRk.jpg',
                'url_image3' => 'https://i.pinimg.com/originals/f1/8a/3d/f18a3d28bbefdab4488fe7eb251c920d.jpg',
                'created_at' => '2022-08-21 11:53:09',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Not Me',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://sucodemanga.com.br/wp-content/uploads/2022/03/not-me-review-poster.jpg',
                'url_image2' => 'https://i.ytimg.com/vi/Nwh5M2uWDmM/maxresdefault.jpg',
                'url_image3' => 'https://i.mydramalist.com/B882R_3s.jpg',
                'created_at' => '2022-08-21 11:54:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'We Best Love: No. 1 For You',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://i.mydramalist.com/q1bOQ_4f.jpg',
                'url_image2' => 'https://orientallline.com/wp-content/uploads/2021/02/wbl.png',
                'url_image3' => 'https://i.mydramalist.com/rv41m_3m.jpg',
                'created_at' => '2022-08-21 11:55:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Cherry Magic',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://img1.ak.crunchyroll.com/i/spire1/c3e01442adc93b8a5bcd83bbd70653a31606984799_main.jpg',
                'url_image2' => 'http://puui.wetvinfo.com/vcover_hz_pic/0/6b2ol4xx6ttgen31605771430646/0',
                'url_image3' => 'https://i.pinimg.com/736x/5e/95/02/5e950229bf871376e9f289b030bbcd0b.jpg',
                'created_at' => '2022-08-21 11:55:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'We Best Love: Fighting Mr. 2nd',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://i.mydramalist.com/ByAD6_4f.jpg',
                'url_image2' => 'https://otakukart.com/wp-content/uploads/2021/03/ByAD6_4f-e1616367802944.jpg',
                'url_image3' => 'https://i.mydramalist.com/rv6AD_3f.jpg',
                'created_at' => '2022-08-21 11:56:15',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Light On Me',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://media.fstatic.com/46cic6UoozO60cRwemMF0zx5FwE=/290x478/smart/media/movies/covers/2021/06/E34mQyxXoAEnPRI.jpg',
                'url_image2' => 'https://i0.wp.com/coreanasdetaubate.com/wp-content/uploads/2021/08/light-on-me.jpeg?fit=900%2C600&ssl=1',
                'url_image3' => 'https://m.media-amazon.com/images/M/MV5BNzZiZTdkMWQtYWY0NS00Yzc3LThhNWEtOWE0NWU0NmI1NmE2XkEyXkFqcGdeQXVyNDYzNDg2MTM@._V1_.jpg',
                'created_at' => '2022-08-21 11:56:44',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Manner of Death',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2020,
                'type_title' => 1,
                'url_image' => 'https://pictures.betaseries.com/fonds/poster/1833da2d419a49e7c92ba55b0636e3d1.jpg',
                'url_image2' => 'https://lovewithoutgender.com/wp-content/uploads/2020/12/MoD1-2-00.png',
                'url_image3' => 'https://static1.personality-database.com/profile_images/806d57ff870b445fa163c75afcd24bb5.png',
                'created_at' => '2022-08-21 11:57:14',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Blueming',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2022,
                'type_title' => 1,
                'url_image' => 'https://i.mydramalist.com/XDBgO_4f.jpg',
                'url_image2' => 'https://sucodemanga.com.br/wp-content/uploads/2022/04/BL-Drama-Blueming.jpg',
                'url_image3' => 'http://pm1.narvii.com/8255/c1c4063a09c665d7cae1ad4e2a3d55ded986b161r1-449-449v2_00.jpg',
                'created_at' => '2022-08-21 11:57:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Cutie Pie',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2022,
                'type_title' => 1,
                'url_image' => 'https://pictures.betaseries.com/fonds/poster/6a1f51b139ba68a215fd0246c60d3709.jpg',
                'url_image2' => 'https://image.tmdb.org/t/p/original/9K0C3s0k1vPm7hKj26T7NglZFfs.jpg',
                'url_image3' => 'https://i.mydramalist.com/R7kWE_3m.jpg',
                'created_at' => '2022-08-21 11:57:57',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'To My Star',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://pbs.twimg.com/media/FAholm3WUAIRjUm.png',
                'url_image2' => 'https://i0.wp.com/revistakoreain.com.br/wp-content/uploads/2022/05/To-My-Star-capa-1.jpg?fit=1200%2C675&ssl=1',
                'url_image3' => 'https://i0.wp.com/0.soompi.io/wp-content/uploads/2022/05/24112440/Son-Woo-Hyun-Kim-Kang-Min-1.jpeg?resize=1080%2C1080&ssl=1',
                'created_at' => '2022-08-21 11:58:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '2Gether',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2020,
                'type_title' => 1,
                'url_image' => 'https://www.themoviedb.org/t/p/original/5rlyWqNn71A8n1mj8l2D8Yic19J.jpg',
                'url_image2' => 'https://1.bp.blogspot.com/-NBe3qa3_r3k/Xsmi1PaaD3I/AAAAAAAAqpE/wk4bdltewAw8hUIS8XjW9SdGhnVUhkFTACLcBGAsYHQ/s1600/f0f015d7-ded9-4432-8b00-2f36909f6cce.jpeg',
                'url_image3' => 'https://www.globalgeek.com.br/wp-content/uploads/2020/05/eE1bnf.jpg',
                'created_at' => '2022-08-21 11:59:02',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Theory of Love',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2019,
                'type_title' => 1,
                'url_image' => 'http://bancodeseries.com.br/images/posters/15518.jpg',
                'url_image2' => 'https://image.tmdb.org/t/p/w780/iYKsX4WjBNNUFgJ4el1c2l0Mcku.jpg',
                'url_image3' => 'https://p77-sign-va.tiktokcdn.com/tos-maliva-avt-0068/8f2e53121232769be1cdaf1cf070ba20~c5_720x720.jpeg?x-expires=1661169600&x-signature=5yUs7yVJzqQmH4QHlxyAfPNUU%2BA%3D',
                'created_at' => '2022-08-21 12:00:20',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'History3: Trapped',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2019,
                'type_title' => 1,
                'url_image' => 'https://i.mydramalist.com/evZmqf.jpg',
                'url_image2' => 'https://6.vikiplatform.com/image/99d9cbc8c0b9409ba9d058f80fefad8e.jpg?x=b&a=0x0',
                'url_image3' => 'https://uploads.spiritfanfiction.com/categorias/visualizar/thumb2-200x200-history3-trapped-11538-081020190426.jpg',
                'created_at' => '2022-08-21 12:00:44',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Lovely Writer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2021,
                'type_title' => 1,
                'url_image' => 'https://i.mydramalist.com/ZPz0L_4f.jpg',
                'url_image2' => 'http://orientallline.com/wp-content/uploads/2021/06/LOVELY-WRITER-.jpg',
                'url_image3' => 'https://64.media.tumblr.com/d65e51144ead0a40a2bbc3b583725e6b/5e1bf0fc8ac7281b-ad/s1280x1920/a7a30fd773e62e9c6338a115859df4f9f63aa8ae.jpg',
                'created_at' => '2022-08-21 12:01:13',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Together With Me',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis iaculis mi, eget commodo eros ultrices quis. Nunc malesuada lobortis commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nec mi sagittis vulputate. Mauris est elit, efficitur sit amet tristique at, dignissim eget quam.',
                'creation_year' => 2019,
                'type_title' => 1,
                'url_image' => 'https://pictures.betaseries.com/fonds/poster/8f00b01bc9e1ea54e60083f4611afb43.jpg',
                'url_image2' => 'https://pm1.narvii.com/6958/af587735128f9241a83e8c3f9073d24eb7a31415r1-1280-720v2_hq.jpg',
                'url_image3' => 'https://1.bp.blogspot.com/-hBYTnS6GC8w/WbbdThv4fhI/AAAAAAAAACU/1ciIVhWWfoYn0tw_g9x5GTgHPyZ2oDZ6wCLcBGAs/s1600/together-with-me-the-series-thailand-2017.jpg',
                'created_at' => '2022-08-21 12:03:13',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}