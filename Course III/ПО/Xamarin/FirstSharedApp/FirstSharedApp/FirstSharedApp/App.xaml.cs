using System;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;

[assembly: XamlCompilation(XamlCompilationOptions.Compile)]
namespace FirstSharedApp
{
    public partial class App : Application
    {
        public App()
        {
            InitializeComponent();
            Label myLabel = new Label { FontSize = 20 };
#if __ANDROID__
            myLabel.Text = "ANDROID";
            myLabel.TextColor = Color.Magenta;
        
#elif __IOS__
            myLabel.Text = "IOS";
            myLabel.TextColor = Color.AliceBlue;
#endif

            MainPage = new ContentPage
            {
                Content = new StackLayout
                {
                    Children = { new Label {Text = "РАЗ РАЗ РАЗ"} }
                }
            };
        }


        protected override void OnStart()
        {
            // Handle when your app starts
        }

        protected override void OnSleep()
        {
            // Handle when your app sleeps
        }

        protected override void OnResume()
        {
            // Handle when your app resumes
        }
    }
}
