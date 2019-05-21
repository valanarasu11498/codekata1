#include <stdio.h>
#include<string.h>
int main()
{
    char s[100],i,c=0;
    //scanf("%[^\n]s",s);
    gets(s);
    while(s[i]!='\0')
    {
        if(s[i]>=48&&s[i]<=57)
        {
            c=c+1;
        }
        i++;
    }
    printf("%d",c);
    
    return 0;
}
