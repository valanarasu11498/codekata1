
#include <stdio.h>
#include<string.h>
int main()
{
    char s[100],i,wc=0,nc=0;
    //scanf("%[^\n]s",s);
    gets(s);
    while(s[i]!='\0')
    {
        if(s[i]>=97&&s[i]<=122||s[i]>=65&&s[i]<=90)
        {
            wc=wc+1;
        }
        else if(s[i]>=48&&s[i]<=57)
        {
            nc=nc+1;
        }
        i++;
    }
    if(wc==0||nc==0)
    {
    printf("No");
    }
    else
    {
        printf("Yes");
    }
    
    return 0;
}
